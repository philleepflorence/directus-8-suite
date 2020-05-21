<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace ZendTest\Stdlib\Guard;

use PHPUnit\Framework\TestCase;
use Zend\Stdlib\Exception\InvalidArgumentException;
use ZendTest\Stdlib\TestAsset\GuardedObject;

/**
 * @covers   Zend\Stdlib\Guard\EmptyGuardTrait
 */
class EmptyGuardTraitTest extends TestCase
{
    public function testGuardAgainstEmptyThrowsException()
    {
        $object = new GuardedObject;
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Argument cannot be empty');
        $object->setNotEmpty('');
    }

    public function testGuardAgainstEmptyAllowsNonEmptyString()
    {
        $object = new GuardedObject;
        $this->assertNull($object->setNotEmpty('foo'));
    }
}
