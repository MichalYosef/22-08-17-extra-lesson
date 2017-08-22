<?php
class BusinessLogicLayer {

    // REFACTOR: use Builder pattern
    /*
        $table_name: string
        $arr: [field] => [value]
        $conds: [field] => []

    */
    public function update($table_name, $arr, $conds) {
        // TODO: make the arr dynamic
        $this->writeToHistory($table_name, $conds);
        $query = "UPDATE (f1, f2, f5) ".$table_name." VALUES (f1_value, f2_value, f5_value) WHERE" ;

    }

    private function writeToHistory($table_name, $conds) {
        // TODO: get the rows and write to history
    }

}

?>