<?php
/**
 * This file is part of the Swiftype App Search PHP Client package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swiftype\AppSearch\Endpoint;

/**
 * Implementation of the  endpoint.
 *
 * @package Swiftype\AppSearch\Endpoint
 *
 * @author  Aurélien FOUCRET <aurelien.foucret@elastic.co>
 */
class ListSynonyms extends AbstractEndpoint
{
    // phpcs:disable
    /**
     * @var string
     */
    protected $method = 'GET';

    /**
     * @var string
     */
    protected $uri = '/engines/{engine_name}/synonyms';

    protected $routeParams = ['engine_name'];

    protected $paramWhitelist = ['page.current', 'page.size'];
    // phpcs:enable
}