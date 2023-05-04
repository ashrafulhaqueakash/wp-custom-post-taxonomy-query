 <?php
            // getting the terms of 'building_filter', which are assigned to these posts
            $building_filters = wp_get_object_terms($destination_post_IDs, 'building_filter'); ?>
            <?php if ($building_filters) : ?>
                <div class="accommodations-filter-wrap">
                    <div class="accommodations-filter-row">

                        <div class="accom-primary-filter">
                            <div class="room-filter-area filter-area">
                                <!--<h3>Filter Rooms</h3>-->



                                <ul data-filter-group class="room-filter">
                                    <li class="filter-label">Rooms Filter</li>
                                    <li class="filter" data-filter="all">Show All</li>

                                    <?php foreach ($building_filters as $building_filter) { ?>

                                        <li class="filter" data-filter=".<?php echo $building_filter->slug; ?>"><?php echo $building_filter->name; ?></li>

                                    <?php } ?>

                                </ul>

                            </div>
                        </div><!-- accom-main-filter -->
                    </div>
                </div>
            <?php endif ?>
        </div>
