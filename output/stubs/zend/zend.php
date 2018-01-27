<?php
class ZendAPI_Queue {
    var $_jobqueue_url;
    function zendapi_queue($queue_url) {}
    function login($password, $application_id=null) {}
    function addJob(&$job) {}
    function getJob($job_id) {}
    function updateJob(&$job) {}
    function removeJob($job_id) {}
    function suspendJob($job_id) {}
    function resumeJob($job_id) {}
    function requeueJob($job) {}
    function getStatistics() {}
    function isScriptExists($path) {}
    function isSuspend() {}
    function getJobsInQueue($filter_options=null, $max_jobs=-1, $with_globals_and_output=false) {}
    function getNumOfJobsInQueue($filter_options=null) {}
    function getAllhosts() {}
    function getAllApplicationIDs() {}
    function getHistoricJobs($status, $start_time, $end_time, $index, $count, &$total) {}
    function suspendQueue() {}
    function resumeQueue() {}
    function getLastError() {}
    function setMaxHistoryTime() {}
}
class ZendAPI_Job {
    var $_id;
    var $_script;
    var $_host;
    var $_name;
    var $_output;
    var $_status = JOB_QUEUE_STATUS_WAITING;
    var $_application_id = null;
    var $_priority = JOB_QUEUE_PRIORITY_NORMAL;
    var $_user_variables = array();
    var $_global_variables = 0;
    var $_predecessor = null;
    var $_scheduled_time = 0;
         var $_interval = 0;
     var $_end_time = null;
     var $_preserved = 0;
    function ZendAPI_Job($script) {}
    function addJobToQueue($jobqueue_url, $password) {}
    function setJobPriority($priority) {}
    function setJobName($name) {}
    function setScript($script) {}
    function setApplicationID($app_id) {}
    function setUserVariables($vars) {}
    function setGlobalVariables($vars) {}
    function setJobDependency($job_id) {}
    function setScheduledTime($timestamp) {}
    function setRecurrenceData($interval, $end_time=null) {}
    function setPreserved($preserved) {}
    function getProperties() {}
    function getOutput() {}
    function getID() {}
    function getHost() {}
    function getScript() {}
    function getJobPriority() {}
    function getJobName() {}
    function getApplicationID() {}
    function getUserVariables() {}
    function getGlobalVariables() {}
    function getJobDependency() {}
    function getScheduledTime() {}
    function getInterval() {}
    function getEndTime() {}
    function getPreserved() {}
    function getJobStatus() {}
     function getTimeToNextRepeat() {}
     function getLastPerformedStatus() {}
}
function accelerator_set_status($status) {}
function output_cache_disable() {}
function output_cache_disable_compression() {}
function output_cache_fetch($key, $function, $lifetime) {}
function output_cache_output($key, $function, $lifetime) {}
function output_cache_remove($filename) {}
function output_cache_remove_url($url) {}
function output_cache_remove_key($key) {}
function output_cache_put($key, $data) {}
function output_cache_get($key, $lifetime) {}
function output_cache_exists($key, $lifetime) {}
function output_cache_stop() {}
function monitor_pass_error($errno, $errstr, $errfile, $errline) {}
function monitor_set_aggregation_hint($hint) {}
function monitor_custom_event($class, $text, $severe = null, $user_data = null) {}
function monitor_httperror_event($error_code, $url, $severe = null) {}
function monitor_license_info() {}
function register_event_handler($event_handler_func, $handler_register_name, $event_type_mask) {}
function unregister_event_handler($handler_name) {}
function zend_send_file($filename, $mime_type, $custom_headers) {}
function zend_send_buffer($buffer, $mime_type, $custom_headers) {}
class java {
    function java($classname) {}
};
class JavaException {
    function getCause() {}
};
