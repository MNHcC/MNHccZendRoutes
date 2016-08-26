<?php

/**
 * MNHcC/ExtendedZendRoutes https://github.com/MNHcC/Zend3bcHelper
 *
 * @link      https://github.com/MNHcC/ExtendedZendRoutes for the canonical source repository
 * @author MNHcC  - Michael Hegenbarth (carschrotter) <mnh@mn-hegenbarth.de>
 * @copyright 2015-2016, MNHcC  - Michael Hegenbarth (carschrotter) <mnh@mn-hegenbarth.de>
 * @license BSD
 */

namespace MNHcC\ExtendedZendRoutes\Router\Http {

    use Zend\Router\RouteMatch;
    use Zend\Router\Exception\RuntimeException;
    use Zend\Router\Http\Segment as ZendSegment;

    class Segment extends ZendSegment {

        const FOR_ZEND = 3;

        protected $isInit = false;

        /**
         * check is init  or when not throw Exception
         * 
         * @return boolean
         * @throws \Zend\Router\Exception\RuntimeException
         */
        public function checkIsInit() {
            if ($this->isInit) {
                return true;
            } else {
                throw new RuntimeException(static::class . ' is not init! Before you use initialise this.');
            }
        }

        public function isInstanceofRouteMatch($a) {
            return ($a instanceof RouteMatch);
        }

    }

}