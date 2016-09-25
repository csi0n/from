<?php
/**
 * Created by csi0n
 * User: huaqing.chen
 * Date: 9/25/16
 * Time: 19:13
 */

namespace csi0n\From\Repositories\From;

use csi0n\From\Models\From\From;

class FromRepository
{
    public function save($act_id, $from)
    {
        $fromModel        = new From;
        $fromModel->actid = $act_id;
        $fromModel->from  = $from;
        return $fromModel->save();
    }
}
