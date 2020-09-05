<?php

namespace Hsy\Categorize;

use Hsy\Categorize\Traits\CategorizeCache;
use Hsy\Categorize\Traits\RetrieveCategorizeDescendants;

class CategoryManager
{
    use CategorizeCache, RetrieveCategorizeDescendants;
}