ERROR - 2013-05-08 15:47:42 --> Uncaught EXCEPTION: exception 'PDOException' with message 'SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''1'' at line 1' in /home/abhishek/web/office/poc/analyticz/api/generic/dao/ImpressionModel.php:58
Stack trace:
#0 /home/abhishek/web/office/poc/analyticz/api/generic/dao/ImpressionModel.php(58): PDOStatement->execute()
#1 /home/abhishek/web/office/poc/analyticz/api/application/controllers/metrics.php(21): ImpressionModel->search(Object(ImpressionCriteria), 1, '1')
#2 [internal function]: Metrics->impression()
#3 /home/abhishek/web/office/poc/analyticz/api/system/core/CodeIgniter.php(359): call_user_func_array(Array, Array)
#4 /home/abhishek/web/office/poc/analyticz/api/index.php(202): require_once('/home/abhishek/...')
#5 {main}
