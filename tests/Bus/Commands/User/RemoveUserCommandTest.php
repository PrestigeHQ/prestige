<?php declare(strict_types=1);

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Tests\Cachet\Bus\Commands\User;

use AltThree\TestBench\CommandTrait;
use CachetHQ\Cachet\Bus\Commands\User\RemoveUserCommand;
use CachetHQ\Cachet\Bus\Handlers\Commands\User\RemoveUserCommandHandler;
use CachetHQ\Cachet\Models\User;
use CachetHQ\Tests\Cachet\AbstractTestCase;

/**
 * This is the remove user command test class.
 *
 * @author James Brooks <james@alt-three.com>
 * @author Graham Campbell <graham@alt-three.com>
 */
class RemoveUserCommandTest extends AbstractTestCase
{
    use CommandTrait;

    protected function getObjectAndParams()
    {
        $params = ['user' => new User()];
        $object = new RemoveUserCommand($params['user']);

        return compact('params', 'object');
    }

    protected function getHandlerClass()
    {
        return RemoveUserCommandHandler::class;
    }
}
