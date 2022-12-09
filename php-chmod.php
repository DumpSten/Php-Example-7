<?php

    /*
        chmod()
        1.  number  starts with zero
        2.  number  file owner permissions
        3.  number user groups permissions
        4.  number is everyone else

        1 = execute permissions
        2 = write permissions
        4 = read permissions
    */

    chmod('test.txt', 0777);
?>