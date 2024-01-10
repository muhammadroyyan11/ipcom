SELECT
    `ospos_sales`.`sale_id`
    , `ospos_sales`.`sale_status`
    , `ospos_sales`.`sale_time`
    , `ospos_sales_items`.`item_id`
    , `ospos_sales_items`.`quantity_purchased`
    , `ospos_sales_items`.`discount`
    , COUNT(`ospos_employees`.`person_id`) AS kasir
    , `ospos_people`.`first_name`
    , `ospos_people`.`last_name`
FROM
    `ospo610`.`ospos_sales_items`
    INNER JOIN `ospo610`.`ospos_sales` 
        ON (`ospos_sales_items`.`sale_id` = `ospos_sales`.`sale_id`)
    INNER JOIN `ospo610`.`ospos_employees` 
        ON (`ospos_sales`.`employee_id` = `ospos_employees`.`person_id`)
    INNER JOIN `ospo610`.`ospos_people` 
        ON (`ospos_employees`.`person_id` = `ospos_people`.`person_id`)
GROUP BY `ospos_sales`.`sale_id`
HAVING SUM(`ospos_sales`.`sale_status`=0) AND DATE(`ospos_sales`.`sale_time`) = DATE('2020.01.01')