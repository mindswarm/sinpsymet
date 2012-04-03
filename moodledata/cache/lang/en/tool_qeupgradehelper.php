<?php $this->cache['en']['tool_qeupgradehelper'] = array (
  'action' => 'Action',
  'alreadydone' => 'Everything has already been converted',
  'areyousure' => 'Are you sure?',
  'areyousuremessage' => 'Do you wish to proceed with upgrading all {$a->numtoconvert} attempts at quiz \'{$a->name}\' in course {$a->shortname}?',
  'areyousureresetmessage' => 'Quiz \'{$a->name}\' in course {$a->shortname} has {$a->totalattempts} attempts, of which {$a->convertedattempts} were upgraded from the old system. Of those, {$a->resettableattempts} can be reset, for later re-conversion. Do you want to proceed with this?',
  'attemptstoconvert' => 'Attempts needing conversion',
  'backtoindex' => 'Back to the main page',
  'conversioncomplete' => 'Conversion complete',
  'convertattempts' => 'Convert attempts',
  'convertquiz' => 'Convert attempts...',
  'convertedattempts' => 'Converted attempts',
  'cronenabled' => 'Cron enabled',
  'croninstructions' => 'You can enable cron to automatically complete the upgrade following a partial upgrade. Cron will run between set hours on the day (according to server local time). Each time cron runs, it will process a number of attempts until Time limit amount of time has been used, then it will stop and wait for the next cron run. Even if you have set up cron, it will not do anything unless it detects that the main upgrade to 2.1 has been completed.',
  'cronprocesingtime' => 'Processing time each cron run',
  'cronsetup' => 'Configure cron',
  'cronsetup_desc' => 'You can configure cron to complete the upgrade of quiz attempt data automatically.',
  'cronstarthour' => 'Start hour',
  'cronstophour' => 'Stop hour',
  'extracttestcase' => 'Extract test case',
  'extracttestcase_desc' => 'Use example data from the database to help create unit tests that can be used to test the upgrade.',
  'gotoindex' => 'Back to the list of quizzes that can be upgraded',
  'gotoquizreport' => 'Go to the reports for this quiz, to check the upgrade',
  'gotoresetlink' => 'Go to the list of quizzes that can be reset',
  'includedintheupgrade' => 'Included in the upgrade?',
  'invalidquizid' => 'Invaid quiz id. Either the quiz does not exist, or it has no attempts to convert.',
  'listpreupgrade' => 'List quizzes and attempts',
  'listpreupgrade_desc' => 'This will show a report of all the quizzes on the system and how many attempts they have. This will give you an idea of the scope of the upgrade you have to do.',
  'listpreupgradeintro' => 'These are the number of quiz attempts that will need to be processed when you upgrade your site. A few tens of thousands is no worry. Much beyond that and you need to think about how long the upgrade will take.',
  'listtodo' => 'List quizzes still to upgrade',
  'listtodo_desc' => 'This will show a report of all the quizzes on the system (if any) that have attempts that still need to be upgraded to the new question engine.',
  'listtodointro' => 'These are all the quizzes with attempt data that still needs to be converted. You can convert the attempts by clicking the link.',
  'listupgraded' => 'List already upgrade quizzes that can be reset',
  'listupgraded_desc' => 'This will show a report of all the quizzes on the system whose attempts have been upgraded, and where the old data is still present so the upgrade could be reset and redone.',
  'listupgradedintro' => 'These are all the quizzes that have attempts that were upgraded, and where the old attempt data is so there, so they could be reset, and the upgrade re-done.',
  'noquizattempts' => 'Your site does not have any quiz attempts at all!',
  'nothingupgradedyet' => 'No upgraded attempts that can be reset',
  'notupgradedsiterequired' => 'This script can only work before the site has been upgraded.',
  'numberofattempts' => 'Number of quiz attempts',
  'oldsitedetected' => 'This appears to be a site that has not yet been upgraded to include the new question engine.',
  'outof' => '{$a->some} out of {$a->total}',
  'pluginname' => 'Question engine upgrade helper',
  'pretendupgrade' => 'Do a dry-run of the attempts upgrade',
  'pretendupgrade_desc' => 'The upgrade does three things: Load the existing data from the database; transform it; then write the transformed data to the DB. This script will test the first two parts of the process.',
  'questionsessions' => 'Question sessions',
  'quizid' => 'Quiz id',
  'quizupgrade' => 'Quiz upgrade status',
  'quizzesthatcanbereset' => 'The following quizzes have converted attempts that you may be able to reset',
  'quizzestobeupgraded' => 'All quizzes with attempts',
  'quizzeswithunconverted' => 'The following quizzes have attempts that need to be converted',
  'resetquiz' => 'Reset attempts...',
  'resetcomplete' => 'Reset complete',
  'resettingquizattempts' => 'Resetting quiz attempts',
  'resettingquizattemptsprogress' => 'Resetting attempt {$a->done} / {$a->outof}',
  'upgradingquizattempts' => 'Upgrading the attempts for quiz \'{$a->name}\' in course {$a->shortname}',
  'upgradedsitedetected' => 'This appears to be a site that has been upgraded to include the new question engine.',
  'upgradedsiterequired' => 'This script can only work after the site has been upgraded.',
  'veryoldattemtps' => 'Your site has {$a} quiz attempts that were never completely updated during the upgrade from Moodle 1.4 to Moodle 1.5. These attempts will be dealt wiht before the main upgrade. You need to to consider the extra time required for this.',
);