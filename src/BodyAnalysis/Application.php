<?php
/**
 * @Author: gan
 * @Description:
 * @File:  Application
 * @Version: 1.0.0
 * @Date: 2022/9/10 9:40 上午
 */
declare(strict_types=1);

namespace AIP\BaiduAIP\BodyAnalysis;

use AIP\BaiduAIP\Auth\ServiceProvider as AuthServiceProvider;
use AIP\BaiduAIP\Kernel\ServiceContainer;

/**
 * Class ServiceProvider
 *
 * @package AIP\BaiduAIP\BodyAnalysis
 * @property BodyAnalysis $body
 */
class Application extends ServiceContainer
{
    public const BodyAnalysis = 'body';

    /**
     * @var string[]
     */
    protected array $providers = [
        AuthServiceProvider::class,
        ServiceProvider::class
    ];
}
