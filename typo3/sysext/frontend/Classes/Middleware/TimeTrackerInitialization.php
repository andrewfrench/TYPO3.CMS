<?php
declare(strict_types = 1);
namespace TYPO3\CMS\Frontend\Middleware;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use TYPO3\CMS\Core\TimeTracker\TimeTracker;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

/**
 * Initializes the time tracker (singleton) for the whole TYPO3 Frontend
 *
 * @internal
 */
class TimeTrackerInitialization implements MiddlewareInterface
{
    /**
     * Starting time tracking (by setting up a singleton object)
     *
     * @param ServerRequestInterface $request
     * @param RequestHandlerInterface $handler
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $timeTrackingEnabled = $this->isBackendUserCookieSet($request);
        $timeTracker = GeneralUtility::makeInstance(
            TimeTracker::class,
            $timeTrackingEnabled
        );
        $timeTracker->start(microtime(true));
        $timeTracker->push('');

        $response = $handler->handle($request);

        // Finish time tracking
        $timeTracker->pull();
        $timeTracker->finish();

        if ($this->isDebugModeEnabled()) {
            return $response->withHeader('X-TYPO3-Parsetime', $timeTracker->getParseTime() . 'ms');
        }
        return $response;
    }

    protected function isBackendUserCookieSet(ServerRequestInterface $request): bool
    {
        $configuredCookieName = trim($GLOBALS['TYPO3_CONF_VARS']['BE']['cookieName']) ?: 'be_typo_user';
        return !empty($request->getCookieParams()[$configuredCookieName]);
    }

    protected function isDebugModeEnabled(): bool
    {
        $controller = $GLOBALS['TSFE'];
        if ($controller instanceof TypoScriptFrontendController && !empty($controller->config['config']['debug'] ?? false)) {
            return true;
        }
        return !empty($GLOBALS['TYPO3_CONF_VARS']['FE']['debug']);
    }
}
