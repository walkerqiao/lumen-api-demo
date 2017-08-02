<?php
namespace App\Transformers;

use App\Models\Folder;
use League\Fractal\ParamBag;
use League\Fractal\TransformerAbstract;

class FolderTransformer extends TransformerAbstract
{
    public function transform(Folder $folder)
    {
        return $folder->attributesToArray();
    }
}
