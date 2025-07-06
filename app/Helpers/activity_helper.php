<?php

use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

if (!function_exists('logActivity')) {
    function logActivity($event, $model = null, $description = null, $data = [])
    {
        ActivityLog::create([
            'user_id'    => Auth::id(),
            'event'      => $event,
            'model_type' => $model ? get_class($model) : null,
            'model_id'   => $model->id ?? null,
            'description'=> $description,
            'data'       => is_array($data) ? json_encode($data) : $data,
            'ip'         => request()->ip(),
        ]);
    }
}
