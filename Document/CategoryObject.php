<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\XtCommerceConnectorBundle\Document;

use ONGR\ContentBundle\Document\Traits\CategoryTrait;
use ONGR\ElasticsearchBundle\Annotation as ES;

/**
 * ElasticSearch Category object.
 *
 * @codeCoverageIgnore
 * @ES\Object
 */
class CategoryObject
{
    use CategoryTrait;
}
