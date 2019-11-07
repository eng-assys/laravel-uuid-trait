<?php

namespace LaravelUuid\Traits;

use Ramsey\Uuid\Uuid as RamseyUuid;

trait Uuid
{
    /**
     * On boot, set the uuid field to the corresponding model
     *
     * @return null
     */
    public static function bootUuid()
    {
        static::creating(function ($model) {
            $model->uuid = RamseyUuid::uuid4();
        });
    }

    /**
     * Find the corresponding Model using its uuid
     *
     * @return mixed
     */
    public static function findUuid($uuid)
    {
        return static::where('uuid', $uuid)->first();
    }
}
