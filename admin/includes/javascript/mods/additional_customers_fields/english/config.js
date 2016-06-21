var hide_empty_list=true;

addListGroup("mysql_fields", "fields_type");

addList("fields_type", "", "-------------------", "no_option_1");
addList("fields_type", "char", "char", "char");
addList("fields_type", "date", "date", "date");
addList("fields_type", "datetime", "datetime", "datetime");
//addList("fields_type", "decimal", "decimal", "decimal");
addList("fields_type", "int", "int", "int");
addList("fields_type", "longtext", "longtext", "longtext");
addList("fields_type", "smallint", "smallint", "smallint");
addList("fields_type", "text", "text", "text");
addList("fields_type", "tinyint", "tinyint", "tinyint");
addList("fields_type", "varchar", "varchar", "varchar");

addList("no_option_1", "-------------------", "", "no_option_2");

addOption("no_option_2", "-------------------", "");

addList("char", "Select field size", "", "no_option_3");
addList("char", "4", "4", "");
addList("char", "8", "8", "");
addList("char", "16", "16", "");
addList("char", "32", "32", "");
addList("char", "48", "48", "");
addList("char", "64", "64", "");
addList("char", "80", "80", "");
addList("char", "96", "96", "");
addList("char", "100", "100", "");
addList("char", "116", "116", "");
addList("char", "132", "132", "");
addList("char", "148", "148", "");
addList("char", "164", "164", "");
addList("char", "180", "180", "");
addList("char", "196", "196", "");
addList("char", "200", "200", "");
addList("char", "216", "216", "");
addList("char", "232", "232", "");
addList("char", "248", "248", "");
addList("char", "255", "255", "");

addOption("no_option_3", "-------------------", "");

addList("date", "Select field size", "", "no_option_4");
addList("date", "-------------------", "", "");

addOption("no_option_4", "-------------------", "");

addList("datetime", "Select field size", "", "no_option_5");
addList("datetime", "-------------------", "", "");

addOption("no_option_5", "-------------------", "");

/*addList("decimal", "Select field size", "", "no_option_6");
addList("decimal", "1", "1", "");
addList("decimal", "2", "2", "");
addList("decimal", "3", "3", "");
addList("decimal", "4", "4", "");
addList("decimal", "5", "5", "");
addList("decimal", "6", "6", "");
addList("decimal", "7", "7", "");
addList("decimal", "8", "8", "");
addList("decimal", "9", "9", "");
addList("decimal", "10", "10", "");
addList("decimal", "11", "11", "");
addList("decimal", "12", "12", "");
addList("decimal", "13", "13", "");
addList("decimal", "14", "14", "");
addList("decimal", "15", "15", "");

addOption("no_option_6", "-------------------", "");*/

addList("int", "Select field size", "", "no_option_7");
addList("int", "1", "1", "");
addList("int", "2", "2", "");
addList("int", "3", "3", "");
addList("int", "4", "4", "");
addList("int", "5", "5", "");
addList("int", "6", "6", "");
addList("int", "7", "7", "");
addList("int", "8", "8", "");
addList("int", "9", "9", "");
addList("int", "10", "10", "");
addList("int", "11", "11", "");
addList("int", "12", "12", "");
addList("int", "13", "13", "");
addList("int", "14", "14", "");
addList("int", "15", "15", "");

addOption("no_option_7", "-------------------", "");

addList("longtext", "Select field size", "", "no_option_8");
addList("longtext", "-------------------", "", "");

addOption("no_option_8", "-------------------", "");

addList("smallint", "Select field size", "", "no_option_9");
addList("smallint", "1", "1", "");
addList("smallint", "2", "2", "");
addList("smallint", "3", "3", "");
addList("smallint", "4", "4", "");
addList("smallint", "5", "5", "");
addList("smallint", "6", "6", "");
addList("smallint", "7", "7", "");
addList("smallint", "8", "8", "");
addList("smallint", "9", "9", "");
addList("smallint", "10", "10", "");
addList("smallint", "11", "11", "");
addList("smallint", "12", "12", "");
addList("smallint", "13", "13", "");
addList("smallint", "14", "14", "");
addList("smallint", "15", "15", "");

addOption("no_option_9", "-------------------", "");

addList("text", "Select field size", "", "no_option_10");
addList("text", "-------------------", "", "");

addOption("no_option_10", "-------------------", "");

addList("tinyint", "Select field size", "", "no_option_11");
addList("tinyint", "1", "1", "");
addList("tinyint", "2", "2", "");
addList("tinyint", "3", "3", "");
addList("tinyint", "4", "4", "");
addList("tinyint", "5", "5", "");
addList("tinyint", "6", "6", "");
addList("tinyint", "7", "7", "");
addList("tinyint", "8", "8", "");
addList("tinyint", "9", "9", "");
addList("tinyint", "10", "10", "");
addList("tinyint", "11", "11", "");
addList("tinyint", "12", "12", "");
addList("tinyint", "13", "13", "");
addList("tinyint", "14", "14", "");
addList("tinyint", "15", "15", "");

addOption("no_option_11", "-------------------", "");

addList("varchar", "Select field size", "", "no_option_12");
addList("varchar", "4", "4", "");
addList("varchar", "8", "8", "");
addList("varchar", "16", "16", "");
addList("varchar", "32", "32", "");
addList("varchar", "48", "48", "");
addList("varchar", "64", "64", "");
addList("varchar", "80", "80", "");
addList("varchar", "96", "96", "");
addList("varchar", "100", "100", "");
addList("varchar", "116", "116", "");
addList("varchar", "132", "132", "");
addList("varchar", "148", "148", "");
addList("varchar", "164", "164", "");
addList("varchar", "180", "180", "");
addList("varchar", "196", "196", "");
addList("varchar", "200", "200", "");
addList("varchar", "216", "216", "");
addList("varchar", "232", "232", "");
addList("varchar", "248", "248", "");
addList("varchar", "255", "255", "");

addOption("no_option_12", "-------------------", "");