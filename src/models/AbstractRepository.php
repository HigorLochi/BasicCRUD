<?php

namespace models;

abstract class AbstractRepository{
    protected function buildPaginationQuery(int $limitPerPage, int $page): string{
        $query = "";
        
        if($page > 0) {
            $query .= " LIMIT " . (($page - 1) * $limitPerPage);

            if($limitPerPage > 0) $query .= ", $limitPerPage";
        }
        
        return $query;
    }
}