<div class="wrap">
            <h1 class="wp-heading-inline">
            Scheduled Events</h1>
            <table class="widefat striped fixed">
                
                <thead>
                <tr>
                    <th>Next Run (GMT\UTC)</th>
                    <th>Schedule</th>
                    <th>Hooks</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach ($cron as $timestamps => $hooks) :?>

                    <?php foreach ( (array) $hooks as $hook => $events):?>

                    <?php foreach( (array) $events as $event) :?>
                    <tr>
                        <td>
                            <?php echo 
                            date_i18n( $date_format, wp_next_scheduled($hook));
                            ?>
                        </td>
                        <td>
                            <?php echo ($event['schedule'])? 
                                esc_html($schedules[$event['schedule']]['display']):
                                'Once';
                            ?>
                        </td>
                        <td>
                            <code><?php echo esc_html($hook); ?></code>
                        </td>
                    </tr>    


                    <?php 
                    endforeach;
                    endforeach;
                    endforeach;
                    ?>

                </tbody>
            </table>
        </div>