<?php

namespace SAM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SAMUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
