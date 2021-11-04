<?php
class Branch_Courses extends Stalker_View
{
    public function view_query() {
        return "SELECT `courses`.`id`,
                    `branches`.`id` AS `branch_id`,
                    `courses`.`name` AS `course_name`,
                    `branches`.`name` AS `branch_name`,
                FROM `courses_class`
                LEFT JOIN `branches`
                    ON `branches`.`id` = `courses_class`.`branch_id`
                ORDER BY `branches`.`type`";
    }
}
?>
