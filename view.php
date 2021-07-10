<?php
namespace Softx\Scheduler;
class View
{
    public function boot()
    {
        add_action('admin_menu', [$this, 'submenupage']);
    }

    public function submenupage()
    {
        add_submenu_page( 'tools.php', 'SoftX Scheduled Events', 'SoftX Scheduled Events', 'manage_options', 'softx-schedule-events', [$this,'template'] );

    }

    public function template()
    {
        $cron = _get_cron_array();
        $schedules = wp_get_schedules();
        $date_format = 'M j, Y @ G:i';
        include_once '_scheduled_template.php';
    }
}