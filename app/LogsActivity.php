<?php

namespace App;

trait LogsActivity
{
    //
    public static function bootLogsActivity()
    {
        static::created(function ($model) {
            logActivity('created', $model, class_basename($model) . ' created', $model->toArray());
        });

        static::updated(function ($model) {
            logActivity('updated', $model, class_basename($model) . ' updated', $model->getChanges());
        });

        static::deleted(function ($model) {
            logActivity('deleted', $model, class_basename($model) . ' deleted', $model->toArray());
        });
    }
}
