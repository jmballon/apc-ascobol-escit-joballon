       IDENTIFICATION DIVISION.
       PROGRAM-ID. YOUR-PROGRAM-NAME.
       DATA DIVISION.
       FILE SECTION.
       WORKING-STORAGE SECTION.
       01 NumofTimes           PIC 9 VALUE 5.
       PROCEDURE DIVISION.
       MAIN-PROCEDURE.
           Begin.
                DISPLAY "Starting to run program"
                PERFORM 3 TIMES
                   DISPLAY ">>>>This is an in line Perform"
                END-PERFORM
                DISPLAY "Finished in line Perform"
                PERFORM OutOfLineEG NumOfTimes TIMES
                DISPLAY "Back in Begin. About to Stop".
                STOP RUN.
           OutOfLineEG.
               DISPLAY ">>>> This is an out of line Perform".
       END PROGRAM YOUR-PROGRAM-NAME.
