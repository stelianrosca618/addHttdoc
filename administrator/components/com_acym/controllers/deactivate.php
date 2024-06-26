<?php

namespace AcyMailing\Controllers;

use AcyMailing\Helpers\UpdatemeHelper;
use AcyMailing\Libraries\acymController;

class DeactivateController extends acymController
{
    public function saveFeedback()
    {
        $data = [
            'reason' => acym_getVar('string', 'reason', ''),
            'comment' => acym_getVar('string', 'otherReason', ''),
            'email' => acym_getVar('string', 'email', ''),
        ];

        UpdatemeHelper::call('public/feedback', 'POST', $data);
        exit;
    }
}
