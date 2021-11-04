<?php
class Branches_Info extends Stalker_Table
{

    public function schema() {
        return Stalker_Schema::build( function ($table) {
            $table->varchar("firstname", 255);
            $table->varchar("lastname", 255);
            $table->email("email");
            $table->password("pass");
            $table->date("date");
            $table->varchar("gender", 255);

        });
    }

}
?>
