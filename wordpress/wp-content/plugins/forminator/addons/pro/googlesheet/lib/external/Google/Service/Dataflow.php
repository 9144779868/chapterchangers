<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Dataflow (v1b3).
 *
 * <p>
 * Google Dataflow API.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://cloud.google.com/dataflow" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Forminator_Google_Service_Dataflow extends Forminator_Google_Service
{
  /** View and manage your data across Google Cloud Platform services. */
  const CLOUD_PLATFORM =
      "https://www.googleapis.com/auth/cloud-platform";
  /** View your email address. */
  const USERINFO_EMAIL =
      "https://www.googleapis.com/auth/userinfo.email";

  public $projects;
  public $projects_jobs;
  public $projects_jobs_messages;
  public $projects_jobs_workItems;
  

  /**
   * Constructs the internal representation of the Dataflow service.
   *
   * @param Forminator_Google_Client $client
   */
  public function __construct(Forminator_Google_Client $client)
  {
    parent::__construct($client);
    $this->rootUrl = 'https://dataflow.googleapis.com/';
    $this->servicePath = '';
    $this->version = 'v1b3';
    $this->serviceName = 'dataflow';

    $this->projects = new Forminator_Google_Service_Dataflow_Projects_Resource(
        $this,
        $this->serviceName,
        'projects',
        array(
          'methods' => array(
            'workerMessages' => array(
              'path' => 'v1b3/projects/{projectId}/WorkerMessages',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects_jobs = new Forminator_Google_Service_Dataflow_ProjectsJobs_Resource(
        $this,
        $this->serviceName,
        'jobs',
        array(
          'methods' => array(
            'create' => array(
              'path' => 'v1b3/projects/{projectId}/jobs',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'view' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'replaceJobId' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'get' => array(
              'path' => 'v1b3/projects/{projectId}/jobs/{jobId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'view' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'getMetrics' => array(
              'path' => 'v1b3/projects/{projectId}/jobs/{jobId}/metrics',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'v1b3/projects/{projectId}/jobs',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'view' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'update' => array(
              'path' => 'v1b3/projects/{projectId}/jobs/{jobId}',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->projects_jobs_messages = new Forminator_Google_Service_Dataflow_ProjectsJobsMessages_Resource(
        $this,
        $this->serviceName,
        'messages',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'v1b3/projects/{projectId}/jobs/{jobId}/messages',
              'httpMethod' => 'GET',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'minimumImportance' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageSize' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'startTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'endTime' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->projects_jobs_workItems = new Forminator_Google_Service_Dataflow_ProjectsJobsWorkItems_Resource(
        $this,
        $this->serviceName,
        'workItems',
        array(
          'methods' => array(
            'lease' => array(
              'path' => 'v1b3/projects/{projectId}/jobs/{jobId}/workItems:lease',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'reportStatus' => array(
              'path' => 'v1b3/projects/{projectId}/jobs/{jobId}/workItems:reportStatus',
              'httpMethod' => 'POST',
              'parameters' => array(
                'projectId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'jobId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
  }
}


/**
 * The "projects" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataflowService = new Forminator_Google_Service_Dataflow(...);
 *   $projects = $dataflowService->projects;
 *  </code>
 */
class Forminator_Google_Service_Dataflow_Projects_Resource extends Forminator_Google_Service_Resource
{

  /**
   * Send a worker_message to the service. (projects.workerMessages)
   *
   * @param string $projectId The project to send the WorkerMessages to.
   * @param Forminator_Google_SendWorkerMessagesRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Forminator_Google_Service_Dataflow_SendWorkerMessagesResponse
   */
  public function workerMessages($projectId, Forminator_Google_Service_Dataflow_SendWorkerMessagesRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('workerMessages', array($params), "Forminator_Google_Service_Dataflow_SendWorkerMessagesResponse");
  }
}

/**
 * The "jobs" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataflowService = new Forminator_Google_Service_Dataflow(...);
 *   $jobs = $dataflowService->jobs;
 *  </code>
 */
class Forminator_Google_Service_Dataflow_ProjectsJobs_Resource extends Forminator_Google_Service_Resource
{

  /**
   * Creates a dataflow job. (jobs.create)
   *
   * @param string $projectId The project which owns the job.
   * @param Forminator_Google_Job $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Level of information requested in response.
   * @opt_param string replaceJobId DEPRECATED. This field is now on the Job
   * message.
   * @return Forminator_Google_Service_Dataflow_Job
   */
  public function create($projectId, Forminator_Google_Service_Dataflow_Job $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('create', array($params), "Forminator_Google_Service_Dataflow_Job");
  }

  /**
   * Gets the state of the specified dataflow job. (jobs.get)
   *
   * @param string $projectId The project which owns the job.
   * @param string $jobId Identifies a single job.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Level of information requested in response.
   * @return Forminator_Google_Service_Dataflow_Job
   */
  public function get($projectId, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "Forminator_Google_Service_Dataflow_Job");
  }

  /**
   * Request the job status. (jobs.getMetrics)
   *
   * @param string $projectId A project id.
   * @param string $jobId The job to get messages for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string startTime Return only metric data that has changed since
   * this time. Default is to return all information about all metrics for the
   * job.
   * @return Forminator_Google_Service_Dataflow_JobMetrics
   */
  public function getMetrics($projectId, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('getMetrics', array($params), "Forminator_Google_Service_Dataflow_JobMetrics");
  }

  /**
   * List the jobs of a project (jobs.listProjectsJobs)
   *
   * @param string $projectId The project which owns the jobs.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view Level of information requested in response. Default is
   * SUMMARY.
   * @opt_param int pageSize If there are many jobs, limit response to at most
   * this many. The actual number of jobs returned will be the lesser of
   * max_responses and an unspecified server-defined limit.
   * @opt_param string pageToken Set this to the 'next_page_token' field of a
   * previous response to request additional results in a long list.
   * @return Forminator_Google_Service_Dataflow_ListJobsResponse
   */
  public function listProjectsJobs($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Forminator_Google_Service_Dataflow_ListJobsResponse");
  }

  /**
   * Updates the state of an existing dataflow job. (jobs.update)
   *
   * @param string $projectId The project which owns the job.
   * @param string $jobId Identifies a single job.
   * @param Forminator_Google_Job $postBody
   * @param array $optParams Optional parameters.
   * @return Forminator_Google_Service_Dataflow_Job
   */
  public function update($projectId, $jobId, Forminator_Google_Service_Dataflow_Job $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "Forminator_Google_Service_Dataflow_Job");
  }
}

/**
 * The "messages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataflowService = new Forminator_Google_Service_Dataflow(...);
 *   $messages = $dataflowService->messages;
 *  </code>
 */
class Forminator_Google_Service_Dataflow_ProjectsJobsMessages_Resource extends Forminator_Google_Service_Resource
{

  /**
   * Request the job status. (messages.listProjectsJobsMessages)
   *
   * @param string $projectId A project id.
   * @param string $jobId The job to get messages about.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string minimumImportance Filter to only get messages with
   * importance >= level
   * @opt_param int pageSize If specified, determines the maximum number of
   * messages to return. If unspecified, the service may choose an appropriate
   * default, or may return an arbitrarily large number of results.
   * @opt_param string pageToken If supplied, this should be the value of
   * next_page_token returned by an earlier call. This will cause the next page of
   * results to be returned.
   * @opt_param string startTime If specified, return only messages with
   * timestamps >= start_time. The default is the job creation time (i.e.
   * beginning of messages).
   * @opt_param string endTime Return only messages with timestamps < end_time.
   * The default is now (i.e. return up to the latest messages available).
   * @return Forminator_Google_Service_Dataflow_ListJobMessagesResponse
   */
  public function listProjectsJobsMessages($projectId, $jobId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "Forminator_Google_Service_Dataflow_ListJobMessagesResponse");
  }
}
/**
 * The "workItems" collection of methods.
 * Typical usage is:
 *  <code>
 *   $dataflowService = new Forminator_Google_Service_Dataflow(...);
 *   $workItems = $dataflowService->workItems;
 *  </code>
 */
class Forminator_Google_Service_Dataflow_ProjectsJobsWorkItems_Resource extends Forminator_Google_Service_Resource
{

  /**
   * Leases a dataflow WorkItem to run. (workItems.lease)
   *
   * @param string $projectId Identifies the project this worker belongs to.
   * @param string $jobId Identifies the workflow job this worker belongs to.
   * @param Forminator_Google_LeaseWorkItemRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Forminator_Google_Service_Dataflow_LeaseWorkItemResponse
   */
  public function lease($projectId, $jobId, Forminator_Google_Service_Dataflow_LeaseWorkItemRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('lease', array($params), "Forminator_Google_Service_Dataflow_LeaseWorkItemResponse");
  }

  /**
   * Reports the status of dataflow WorkItems leased by a worker.
   * (workItems.reportStatus)
   *
   * @param string $projectId The project which owns the WorkItem's job.
   * @param string $jobId The job which the WorkItem is part of.
   * @param Forminator_Google_ReportWorkItemStatusRequest $postBody
   * @param array $optParams Optional parameters.
   * @return Forminator_Google_Service_Dataflow_ReportWorkItemStatusResponse
   */
  public function reportStatus($projectId, $jobId, Forminator_Google_Service_Dataflow_ReportWorkItemStatusRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'jobId' => $jobId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('reportStatus', array($params), "Forminator_Google_Service_Dataflow_ReportWorkItemStatusResponse");
  }
}




class Forminator_Google_Service_Dataflow_ApproximateProgress extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $percentComplete;
  protected $positionType = 'Forminator_Google_Service_Dataflow_Position';
  protected $positionDataType = '';
  public $remainingTime;


  public function setPercentComplete($percentComplete)
  {
    $this->percentComplete = $percentComplete;
  }
  public function getPercentComplete()
  {
    return $this->percentComplete;
  }
  public function setPosition(Forminator_Google_Service_Dataflow_Position $position)
  {
    $this->position = $position;
  }
  public function getPosition()
  {
    return $this->position;
  }
  public function setRemainingTime($remainingTime)
  {
    $this->remainingTime = $remainingTime;
  }
  public function getRemainingTime()
  {
    return $this->remainingTime;
  }
}

class Forminator_Google_Service_Dataflow_ApproximateReportedProgress extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $consumedParallelismType = 'Forminator_Google_Service_Dataflow_ReportedParallelism';
  protected $consumedParallelismDataType = '';
  public $fractionConsumed;
  protected $positionType = 'Forminator_Google_Service_Dataflow_Position';
  protected $positionDataType = '';
  protected $remainingParallelismType = 'Forminator_Google_Service_Dataflow_ReportedParallelism';
  protected $remainingParallelismDataType = '';


  public function setConsumedParallelism(Forminator_Google_Service_Dataflow_ReportedParallelism $consumedParallelism)
  {
    $this->consumedParallelism = $consumedParallelism;
  }
  public function getConsumedParallelism()
  {
    return $this->consumedParallelism;
  }
  public function setFractionConsumed($fractionConsumed)
  {
    $this->fractionConsumed = $fractionConsumed;
  }
  public function getFractionConsumed()
  {
    return $this->fractionConsumed;
  }
  public function setPosition(Forminator_Google_Service_Dataflow_Position $position)
  {
    $this->position = $position;
  }
  public function getPosition()
  {
    return $this->position;
  }
  public function setRemainingParallelism(Forminator_Google_Service_Dataflow_ReportedParallelism $remainingParallelism)
  {
    $this->remainingParallelism = $remainingParallelism;
  }
  public function getRemainingParallelism()
  {
    return $this->remainingParallelism;
  }
}

class Forminator_Google_Service_Dataflow_ApproximateSplitRequest extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $fractionConsumed;
  protected $positionType = 'Forminator_Google_Service_Dataflow_Position';
  protected $positionDataType = '';


  public function setFractionConsumed($fractionConsumed)
  {
    $this->fractionConsumed = $fractionConsumed;
  }
  public function getFractionConsumed()
  {
    return $this->fractionConsumed;
  }
  public function setPosition(Forminator_Google_Service_Dataflow_Position $position)
  {
    $this->position = $position;
  }
  public function getPosition()
  {
    return $this->position;
  }
}

class Forminator_Google_Service_Dataflow_AutoscalingSettings extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $algorithm;
  public $maxNumWorkers;


  public function setAlgorithm($algorithm)
  {
    $this->algorithm = $algorithm;
  }
  public function getAlgorithm()
  {
    return $this->algorithm;
  }
  public function setMaxNumWorkers($maxNumWorkers)
  {
    $this->maxNumWorkers = $maxNumWorkers;
  }
  public function getMaxNumWorkers()
  {
    return $this->maxNumWorkers;
  }
}

class Forminator_Google_Service_Dataflow_ComputationTopology extends Forminator_Google_Collection
{
  protected $collection_key = 'stateFamilies';
  protected $internal_gapi_mappings = array(
  );
  public $computationId;
  protected $inputsType = 'Forminator_Google_Service_Dataflow_StreamLocation';
  protected $inputsDataType = 'array';
  protected $keyRangesType = 'Forminator_Google_Service_Dataflow_KeyRangeLocation';
  protected $keyRangesDataType = 'array';
  protected $outputsType = 'Forminator_Google_Service_Dataflow_StreamLocation';
  protected $outputsDataType = 'array';
  protected $stateFamiliesType = 'Forminator_Google_Service_Dataflow_StateFamilyConfig';
  protected $stateFamiliesDataType = 'array';
  public $systemStageName;
  public $userStageName;


  public function setComputationId($computationId)
  {
    $this->computationId = $computationId;
  }
  public function getComputationId()
  {
    return $this->computationId;
  }
  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  public function getInputs()
  {
    return $this->inputs;
  }
  public function setKeyRanges($keyRanges)
  {
    $this->keyRanges = $keyRanges;
  }
  public function getKeyRanges()
  {
    return $this->keyRanges;
  }
  public function setOutputs($outputs)
  {
    $this->outputs = $outputs;
  }
  public function getOutputs()
  {
    return $this->outputs;
  }
  public function setStateFamilies($stateFamilies)
  {
    $this->stateFamilies = $stateFamilies;
  }
  public function getStateFamilies()
  {
    return $this->stateFamilies;
  }
  public function setSystemStageName($systemStageName)
  {
    $this->systemStageName = $systemStageName;
  }
  public function getSystemStageName()
  {
    return $this->systemStageName;
  }
  public function setUserStageName($userStageName)
  {
    $this->userStageName = $userStageName;
  }
  public function getUserStageName()
  {
    return $this->userStageName;
  }
}

class Forminator_Google_Service_Dataflow_ConcatPosition extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $index;
  protected $positionType = 'Forminator_Google_Service_Dataflow_Position';
  protected $positionDataType = '';


  public function setIndex($index)
  {
    $this->index = $index;
  }
  public function getIndex()
  {
    return $this->index;
  }
  public function setPosition(Forminator_Google_Service_Dataflow_Position $position)
  {
    $this->position = $position;
  }
  public function getPosition()
  {
    return $this->position;
  }
}

class Forminator_Google_Service_Dataflow_CustomSourceLocation extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $stateful;


  public function setStateful($stateful)
  {
    $this->stateful = $stateful;
  }
  public function getStateful()
  {
    return $this->stateful;
  }
}

class Forminator_Google_Service_Dataflow_DataDiskAssignment extends Forminator_Google_Collection
{
  protected $collection_key = 'dataDisks';
  protected $internal_gapi_mappings = array(
  );
  public $dataDisks;
  public $vmInstance;


  public function setDataDisks($dataDisks)
  {
    $this->dataDisks = $dataDisks;
  }
  public function getDataDisks()
  {
    return $this->dataDisks;
  }
  public function setVmInstance($vmInstance)
  {
    $this->vmInstance = $vmInstance;
  }
  public function getVmInstance()
  {
    return $this->vmInstance;
  }
}

class Forminator_Google_Service_Dataflow_DerivedSource extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $derivationMode;
  protected $sourceType = 'Forminator_Google_Service_Dataflow_Source';
  protected $sourceDataType = '';


  public function setDerivationMode($derivationMode)
  {
    $this->derivationMode = $derivationMode;
  }
  public function getDerivationMode()
  {
    return $this->derivationMode;
  }
  public function setSource(Forminator_Google_Service_Dataflow_Source $source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
}

class Forminator_Google_Service_Dataflow_Disk extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $diskType;
  public $mountPoint;
  public $sizeGb;


  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  public function getDiskType()
  {
    return $this->diskType;
  }
  public function setMountPoint($mountPoint)
  {
    $this->mountPoint = $mountPoint;
  }
  public function getMountPoint()
  {
    return $this->mountPoint;
  }
  public function setSizeGb($sizeGb)
  {
    $this->sizeGb = $sizeGb;
  }
  public function getSizeGb()
  {
    return $this->sizeGb;
  }
}

class Forminator_Google_Service_Dataflow_DynamicSourceSplit extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $primaryType = 'Forminator_Google_Service_Dataflow_DerivedSource';
  protected $primaryDataType = '';
  protected $residualType = 'Forminator_Google_Service_Dataflow_DerivedSource';
  protected $residualDataType = '';


  public function setPrimary(Forminator_Google_Service_Dataflow_DerivedSource $primary)
  {
    $this->primary = $primary;
  }
  public function getPrimary()
  {
    return $this->primary;
  }
  public function setResidual(Forminator_Google_Service_Dataflow_DerivedSource $residual)
  {
    $this->residual = $residual;
  }
  public function getResidual()
  {
    return $this->residual;
  }
}

class Forminator_Google_Service_Dataflow_Environment extends Forminator_Google_Collection
{
  protected $collection_key = 'workerPools';
  protected $internal_gapi_mappings = array(
  );
  public $clusterManagerApiService;
  public $dataset;
  public $experiments;
  public $internalExperiments;
  public $sdkPipelineOptions;
  public $tempStoragePrefix;
  public $userAgent;
  public $version;
  protected $workerPoolsType = 'Forminator_Google_Service_Dataflow_WorkerPool';
  protected $workerPoolsDataType = 'array';


  public function setClusterManagerApiService($clusterManagerApiService)
  {
    $this->clusterManagerApiService = $clusterManagerApiService;
  }
  public function getClusterManagerApiService()
  {
    return $this->clusterManagerApiService;
  }
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  public function getDataset()
  {
    return $this->dataset;
  }
  public function setExperiments($experiments)
  {
    $this->experiments = $experiments;
  }
  public function getExperiments()
  {
    return $this->experiments;
  }
  public function setInternalExperiments($internalExperiments)
  {
    $this->internalExperiments = $internalExperiments;
  }
  public function getInternalExperiments()
  {
    return $this->internalExperiments;
  }
  public function setSdkPipelineOptions($sdkPipelineOptions)
  {
    $this->sdkPipelineOptions = $sdkPipelineOptions;
  }
  public function getSdkPipelineOptions()
  {
    return $this->sdkPipelineOptions;
  }
  public function setTempStoragePrefix($tempStoragePrefix)
  {
    $this->tempStoragePrefix = $tempStoragePrefix;
  }
  public function getTempStoragePrefix()
  {
    return $this->tempStoragePrefix;
  }
  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }
  public function getUserAgent()
  {
    return $this->userAgent;
  }
  public function setVersion($version)
  {
    $this->version = $version;
  }
  public function getVersion()
  {
    return $this->version;
  }
  public function setWorkerPools($workerPools)
  {
    $this->workerPools = $workerPools;
  }
  public function getWorkerPools()
  {
    return $this->workerPools;
  }
}

class Forminator_Google_Service_Dataflow_FlattenInstruction extends Forminator_Google_Collection
{
  protected $collection_key = 'inputs';
  protected $internal_gapi_mappings = array(
  );
  protected $inputsType = 'Forminator_Google_Service_Dataflow_InstructionInput';
  protected $inputsDataType = 'array';


  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  public function getInputs()
  {
    return $this->inputs;
  }
}

class Forminator_Google_Service_Dataflow_InstructionInput extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $outputNum;
  public $producerInstructionIndex;


  public function setOutputNum($outputNum)
  {
    $this->outputNum = $outputNum;
  }
  public function getOutputNum()
  {
    return $this->outputNum;
  }
  public function setProducerInstructionIndex($producerInstructionIndex)
  {
    $this->producerInstructionIndex = $producerInstructionIndex;
  }
  public function getProducerInstructionIndex()
  {
    return $this->producerInstructionIndex;
  }
}

class Forminator_Google_Service_Dataflow_InstructionOutput extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $codec;
  public $name;
  public $systemName;


  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  public function getCodec()
  {
    return $this->codec;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  public function getSystemName()
  {
    return $this->systemName;
  }
}

class Forminator_Google_Service_Dataflow_Job extends Forminator_Google_Collection
{
  protected $collection_key = 'tempFiles';
  protected $internal_gapi_mappings = array(
  );
  public $clientRequestId;
  public $createTime;
  public $currentState;
  public $currentStateTime;
  protected $environmentType = 'Forminator_Google_Service_Dataflow_Environment';
  protected $environmentDataType = '';
  protected $executionInfoType = 'Forminator_Google_Service_Dataflow_JobExecutionInfo';
  protected $executionInfoDataType = '';
  public $id;
  public $name;
  public $projectId;
  public $replaceJobId;
  public $replacedByJobId;
  public $requestedState;
  protected $stepsType = 'Forminator_Google_Service_Dataflow_Step';
  protected $stepsDataType = 'array';
  public $tempFiles;
  public $transformNameMapping;
  public $type;


  public function setClientRequestId($clientRequestId)
  {
    $this->clientRequestId = $clientRequestId;
  }
  public function getClientRequestId()
  {
    return $this->clientRequestId;
  }
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }
  public function getCurrentState()
  {
    return $this->currentState;
  }
  public function setCurrentStateTime($currentStateTime)
  {
    $this->currentStateTime = $currentStateTime;
  }
  public function getCurrentStateTime()
  {
    return $this->currentStateTime;
  }
  public function setEnvironment(Forminator_Google_Service_Dataflow_Environment $environment)
  {
    $this->environment = $environment;
  }
  public function getEnvironment()
  {
    return $this->environment;
  }
  public function setExecutionInfo(Forminator_Google_Service_Dataflow_JobExecutionInfo $executionInfo)
  {
    $this->executionInfo = $executionInfo;
  }
  public function getExecutionInfo()
  {
    return $this->executionInfo;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setReplaceJobId($replaceJobId)
  {
    $this->replaceJobId = $replaceJobId;
  }
  public function getReplaceJobId()
  {
    return $this->replaceJobId;
  }
  public function setReplacedByJobId($replacedByJobId)
  {
    $this->replacedByJobId = $replacedByJobId;
  }
  public function getReplacedByJobId()
  {
    return $this->replacedByJobId;
  }
  public function setRequestedState($requestedState)
  {
    $this->requestedState = $requestedState;
  }
  public function getRequestedState()
  {
    return $this->requestedState;
  }
  public function setSteps($steps)
  {
    $this->steps = $steps;
  }
  public function getSteps()
  {
    return $this->steps;
  }
  public function setTempFiles($tempFiles)
  {
    $this->tempFiles = $tempFiles;
  }
  public function getTempFiles()
  {
    return $this->tempFiles;
  }
  public function setTransformNameMapping($transformNameMapping)
  {
    $this->transformNameMapping = $transformNameMapping;
  }
  public function getTransformNameMapping()
  {
    return $this->transformNameMapping;
  }
  public function setType($type)
  {
    $this->type = $type;
  }
  public function getType()
  {
    return $this->type;
  }
}

class Forminator_Google_Service_Dataflow_JobExecutionInfo extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $stagesType = 'Forminator_Google_Service_Dataflow_JobExecutionStageInfo';
  protected $stagesDataType = 'map';


  public function setStages($stages)
  {
    $this->stages = $stages;
  }
  public function getStages()
  {
    return $this->stages;
  }
}

class Forminator_Google_Service_Dataflow_JobExecutionStageInfo extends Forminator_Google_Collection
{
  protected $collection_key = 'stepName';
  protected $internal_gapi_mappings = array(
  );
  public $stepName;


  public function setStepName($stepName)
  {
    $this->stepName = $stepName;
  }
  public function getStepName()
  {
    return $this->stepName;
  }
}

class Forminator_Google_Service_Dataflow_JobMessage extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $id;
  public $messageImportance;
  public $messageText;
  public $time;


  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setMessageImportance($messageImportance)
  {
    $this->messageImportance = $messageImportance;
  }
  public function getMessageImportance()
  {
    return $this->messageImportance;
  }
  public function setMessageText($messageText)
  {
    $this->messageText = $messageText;
  }
  public function getMessageText()
  {
    return $this->messageText;
  }
  public function setTime($time)
  {
    $this->time = $time;
  }
  public function getTime()
  {
    return $this->time;
  }
}

class Forminator_Google_Service_Dataflow_JobMetrics extends Forminator_Google_Collection
{
  protected $collection_key = 'metrics';
  protected $internal_gapi_mappings = array(
  );
  public $metricTime;
  protected $metricsType = 'Forminator_Google_Service_Dataflow_MetricUpdate';
  protected $metricsDataType = 'array';


  public function setMetricTime($metricTime)
  {
    $this->metricTime = $metricTime;
  }
  public function getMetricTime()
  {
    return $this->metricTime;
  }
  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }
  public function getMetrics()
  {
    return $this->metrics;
  }
}

class Forminator_Google_Service_Dataflow_KeyRangeDataDiskAssignment extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $dataDisk;
  public $end;
  public $start;


  public function setDataDisk($dataDisk)
  {
    $this->dataDisk = $dataDisk;
  }
  public function getDataDisk()
  {
    return $this->dataDisk;
  }
  public function setEnd($end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setStart($start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class Forminator_Google_Service_Dataflow_KeyRangeLocation extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $dataDisk;
  public $deliveryEndpoint;
  public $end;
  public $persistentDirectory;
  public $start;


  public function setDataDisk($dataDisk)
  {
    $this->dataDisk = $dataDisk;
  }
  public function getDataDisk()
  {
    return $this->dataDisk;
  }
  public function setDeliveryEndpoint($deliveryEndpoint)
  {
    $this->deliveryEndpoint = $deliveryEndpoint;
  }
  public function getDeliveryEndpoint()
  {
    return $this->deliveryEndpoint;
  }
  public function setEnd($end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setPersistentDirectory($persistentDirectory)
  {
    $this->persistentDirectory = $persistentDirectory;
  }
  public function getPersistentDirectory()
  {
    return $this->persistentDirectory;
  }
  public function setStart($start)
  {
    $this->start = $start;
  }
  public function getStart()
  {
    return $this->start;
  }
}

class Forminator_Google_Service_Dataflow_LeaseWorkItemRequest extends Forminator_Google_Collection
{
  protected $collection_key = 'workerCapabilities';
  protected $internal_gapi_mappings = array(
  );
  public $currentWorkerTime;
  public $requestedLeaseDuration;
  public $workItemTypes;
  public $workerCapabilities;
  public $workerId;


  public function setCurrentWorkerTime($currentWorkerTime)
  {
    $this->currentWorkerTime = $currentWorkerTime;
  }
  public function getCurrentWorkerTime()
  {
    return $this->currentWorkerTime;
  }
  public function setRequestedLeaseDuration($requestedLeaseDuration)
  {
    $this->requestedLeaseDuration = $requestedLeaseDuration;
  }
  public function getRequestedLeaseDuration()
  {
    return $this->requestedLeaseDuration;
  }
  public function setWorkItemTypes($workItemTypes)
  {
    $this->workItemTypes = $workItemTypes;
  }
  public function getWorkItemTypes()
  {
    return $this->workItemTypes;
  }
  public function setWorkerCapabilities($workerCapabilities)
  {
    $this->workerCapabilities = $workerCapabilities;
  }
  public function getWorkerCapabilities()
  {
    return $this->workerCapabilities;
  }
  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
  public function getWorkerId()
  {
    return $this->workerId;
  }
}

class Forminator_Google_Service_Dataflow_LeaseWorkItemResponse extends Forminator_Google_Collection
{
  protected $collection_key = 'workItems';
  protected $internal_gapi_mappings = array(
  );
  protected $workItemsType = 'Forminator_Google_Service_Dataflow_WorkItem';
  protected $workItemsDataType = 'array';


  public function setWorkItems($workItems)
  {
    $this->workItems = $workItems;
  }
  public function getWorkItems()
  {
    return $this->workItems;
  }
}

class Forminator_Google_Service_Dataflow_ListJobMessagesResponse extends Forminator_Google_Collection
{
  protected $collection_key = 'jobMessages';
  protected $internal_gapi_mappings = array(
  );
  protected $jobMessagesType = 'Forminator_Google_Service_Dataflow_JobMessage';
  protected $jobMessagesDataType = 'array';
  public $nextPageToken;


  public function setJobMessages($jobMessages)
  {
    $this->jobMessages = $jobMessages;
  }
  public function getJobMessages()
  {
    return $this->jobMessages;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Forminator_Google_Service_Dataflow_ListJobsResponse extends Forminator_Google_Collection
{
  protected $collection_key = 'jobs';
  protected $internal_gapi_mappings = array(
  );
  protected $jobsType = 'Forminator_Google_Service_Dataflow_Job';
  protected $jobsDataType = 'array';
  public $nextPageToken;


  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }
  public function getJobs()
  {
    return $this->jobs;
  }
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

class Forminator_Google_Service_Dataflow_MapTask extends Forminator_Google_Collection
{
  protected $collection_key = 'instructions';
  protected $internal_gapi_mappings = array(
  );
  protected $instructionsType = 'Forminator_Google_Service_Dataflow_ParallelInstruction';
  protected $instructionsDataType = 'array';
  public $stageName;
  public $systemName;


  public function setInstructions($instructions)
  {
    $this->instructions = $instructions;
  }
  public function getInstructions()
  {
    return $this->instructions;
  }
  public function setStageName($stageName)
  {
    $this->stageName = $stageName;
  }
  public function getStageName()
  {
    return $this->stageName;
  }
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  public function getSystemName()
  {
    return $this->systemName;
  }
}

class Forminator_Google_Service_Dataflow_MetricStructuredName extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $context;
  public $name;
  public $origin;


  public function setContext($context)
  {
    $this->context = $context;
  }
  public function getContext()
  {
    return $this->context;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }
  public function getOrigin()
  {
    return $this->origin;
  }
}

class Forminator_Google_Service_Dataflow_MetricUpdate extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $cumulative;
  public $internal;
  public $kind;
  public $meanCount;
  public $meanSum;
  protected $nameType = 'Forminator_Google_Service_Dataflow_MetricStructuredName';
  protected $nameDataType = '';
  public $scalar;
  public $set;
  public $updateTime;


  public function setCumulative($cumulative)
  {
    $this->cumulative = $cumulative;
  }
  public function getCumulative()
  {
    return $this->cumulative;
  }
  public function setInternal($internal)
  {
    $this->internal = $internal;
  }
  public function getInternal()
  {
    return $this->internal;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMeanCount($meanCount)
  {
    $this->meanCount = $meanCount;
  }
  public function getMeanCount()
  {
    return $this->meanCount;
  }
  public function setMeanSum($meanSum)
  {
    $this->meanSum = $meanSum;
  }
  public function getMeanSum()
  {
    return $this->meanSum;
  }
  public function setName(Forminator_Google_Service_Dataflow_MetricStructuredName $name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setScalar($scalar)
  {
    $this->scalar = $scalar;
  }
  public function getScalar()
  {
    return $this->scalar;
  }
  public function setSet($set)
  {
    $this->set = $set;
  }
  public function getSet()
  {
    return $this->set;
  }
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

class Forminator_Google_Service_Dataflow_MountedDataDisk extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $dataDisk;


  public function setDataDisk($dataDisk)
  {
    $this->dataDisk = $dataDisk;
  }
  public function getDataDisk()
  {
    return $this->dataDisk;
  }
}

class Forminator_Google_Service_Dataflow_MultiOutputInfo extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $tag;


  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  public function getTag()
  {
    return $this->tag;
  }
}

class Forminator_Google_Service_Dataflow_Package extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $location;
  public $name;


  public function setLocation($location)
  {
    $this->location = $location;
  }
  public function getLocation()
  {
    return $this->location;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
}

class Forminator_Google_Service_Dataflow_ParDoInstruction extends Forminator_Google_Collection
{
  protected $collection_key = 'sideInputs';
  protected $internal_gapi_mappings = array(
  );
  protected $inputType = 'Forminator_Google_Service_Dataflow_InstructionInput';
  protected $inputDataType = '';
  protected $multiOutputInfosType = 'Forminator_Google_Service_Dataflow_MultiOutputInfo';
  protected $multiOutputInfosDataType = 'array';
  public $numOutputs;
  protected $sideInputsType = 'Forminator_Google_Service_Dataflow_SideInputInfo';
  protected $sideInputsDataType = 'array';
  public $userFn;


  public function setInput(Forminator_Google_Service_Dataflow_InstructionInput $input)
  {
    $this->input = $input;
  }
  public function getInput()
  {
    return $this->input;
  }
  public function setMultiOutputInfos($multiOutputInfos)
  {
    $this->multiOutputInfos = $multiOutputInfos;
  }
  public function getMultiOutputInfos()
  {
    return $this->multiOutputInfos;
  }
  public function setNumOutputs($numOutputs)
  {
    $this->numOutputs = $numOutputs;
  }
  public function getNumOutputs()
  {
    return $this->numOutputs;
  }
  public function setSideInputs($sideInputs)
  {
    $this->sideInputs = $sideInputs;
  }
  public function getSideInputs()
  {
    return $this->sideInputs;
  }
  public function setUserFn($userFn)
  {
    $this->userFn = $userFn;
  }
  public function getUserFn()
  {
    return $this->userFn;
  }
}

class Forminator_Google_Service_Dataflow_ParallelInstruction extends Forminator_Google_Collection
{
  protected $collection_key = 'outputs';
  protected $internal_gapi_mappings = array(
  );
  protected $flattenType = 'Forminator_Google_Service_Dataflow_FlattenInstruction';
  protected $flattenDataType = '';
  public $name;
  protected $outputsType = 'Forminator_Google_Service_Dataflow_InstructionOutput';
  protected $outputsDataType = 'array';
  protected $parDoType = 'Forminator_Google_Service_Dataflow_ParDoInstruction';
  protected $parDoDataType = '';
  protected $partialGroupByKeyType = 'Forminator_Google_Service_Dataflow_PartialGroupByKeyInstruction';
  protected $partialGroupByKeyDataType = '';
  protected $readType = 'Forminator_Google_Service_Dataflow_ReadInstruction';
  protected $readDataType = '';
  public $systemName;
  protected $writeType = 'Forminator_Google_Service_Dataflow_WriteInstruction';
  protected $writeDataType = '';


  public function setFlatten(Forminator_Google_Service_Dataflow_FlattenInstruction $flatten)
  {
    $this->flatten = $flatten;
  }
  public function getFlatten()
  {
    return $this->flatten;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOutputs($outputs)
  {
    $this->outputs = $outputs;
  }
  public function getOutputs()
  {
    return $this->outputs;
  }
  public function setParDo(Forminator_Google_Service_Dataflow_ParDoInstruction $parDo)
  {
    $this->parDo = $parDo;
  }
  public function getParDo()
  {
    return $this->parDo;
  }
  public function setPartialGroupByKey(Forminator_Google_Service_Dataflow_PartialGroupByKeyInstruction $partialGroupByKey)
  {
    $this->partialGroupByKey = $partialGroupByKey;
  }
  public function getPartialGroupByKey()
  {
    return $this->partialGroupByKey;
  }
  public function setRead(Forminator_Google_Service_Dataflow_ReadInstruction $read)
  {
    $this->read = $read;
  }
  public function getRead()
  {
    return $this->read;
  }
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  public function getSystemName()
  {
    return $this->systemName;
  }
  public function setWrite(Forminator_Google_Service_Dataflow_WriteInstruction $write)
  {
    $this->write = $write;
  }
  public function getWrite()
  {
    return $this->write;
  }
}

class Forminator_Google_Service_Dataflow_PartialGroupByKeyInstruction extends Forminator_Google_Collection
{
  protected $collection_key = 'sideInputs';
  protected $internal_gapi_mappings = array(
  );
  protected $inputType = 'Forminator_Google_Service_Dataflow_InstructionInput';
  protected $inputDataType = '';
  public $inputElementCodec;
  protected $sideInputsType = 'Forminator_Google_Service_Dataflow_SideInputInfo';
  protected $sideInputsDataType = 'array';
  public $valueCombiningFn;


  public function setInput(Forminator_Google_Service_Dataflow_InstructionInput $input)
  {
    $this->input = $input;
  }
  public function getInput()
  {
    return $this->input;
  }
  public function setInputElementCodec($inputElementCodec)
  {
    $this->inputElementCodec = $inputElementCodec;
  }
  public function getInputElementCodec()
  {
    return $this->inputElementCodec;
  }
  public function setSideInputs($sideInputs)
  {
    $this->sideInputs = $sideInputs;
  }
  public function getSideInputs()
  {
    return $this->sideInputs;
  }
  public function setValueCombiningFn($valueCombiningFn)
  {
    $this->valueCombiningFn = $valueCombiningFn;
  }
  public function getValueCombiningFn()
  {
    return $this->valueCombiningFn;
  }
}

class Forminator_Google_Service_Dataflow_Position extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $byteOffset;
  protected $concatPositionType = 'Forminator_Google_Service_Dataflow_ConcatPosition';
  protected $concatPositionDataType = '';
  public $end;
  public $key;
  public $recordIndex;
  public $shufflePosition;


  public function setByteOffset($byteOffset)
  {
    $this->byteOffset = $byteOffset;
  }
  public function getByteOffset()
  {
    return $this->byteOffset;
  }
  public function setConcatPosition(Forminator_Google_Service_Dataflow_ConcatPosition $concatPosition)
  {
    $this->concatPosition = $concatPosition;
  }
  public function getConcatPosition()
  {
    return $this->concatPosition;
  }
  public function setEnd($end)
  {
    $this->end = $end;
  }
  public function getEnd()
  {
    return $this->end;
  }
  public function setKey($key)
  {
    $this->key = $key;
  }
  public function getKey()
  {
    return $this->key;
  }
  public function setRecordIndex($recordIndex)
  {
    $this->recordIndex = $recordIndex;
  }
  public function getRecordIndex()
  {
    return $this->recordIndex;
  }
  public function setShufflePosition($shufflePosition)
  {
    $this->shufflePosition = $shufflePosition;
  }
  public function getShufflePosition()
  {
    return $this->shufflePosition;
  }
}

class Forminator_Google_Service_Dataflow_PubsubLocation extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $dropLateData;
  public $idLabel;
  public $subscription;
  public $timestampLabel;
  public $topic;
  public $trackingSubscription;


  public function setDropLateData($dropLateData)
  {
    $this->dropLateData = $dropLateData;
  }
  public function getDropLateData()
  {
    return $this->dropLateData;
  }
  public function setIdLabel($idLabel)
  {
    $this->idLabel = $idLabel;
  }
  public function getIdLabel()
  {
    return $this->idLabel;
  }
  public function setSubscription($subscription)
  {
    $this->subscription = $subscription;
  }
  public function getSubscription()
  {
    return $this->subscription;
  }
  public function setTimestampLabel($timestampLabel)
  {
    $this->timestampLabel = $timestampLabel;
  }
  public function getTimestampLabel()
  {
    return $this->timestampLabel;
  }
  public function setTopic($topic)
  {
    $this->topic = $topic;
  }
  public function getTopic()
  {
    return $this->topic;
  }
  public function setTrackingSubscription($trackingSubscription)
  {
    $this->trackingSubscription = $trackingSubscription;
  }
  public function getTrackingSubscription()
  {
    return $this->trackingSubscription;
  }
}

class Forminator_Google_Service_Dataflow_ReadInstruction extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $sourceType = 'Forminator_Google_Service_Dataflow_Source';
  protected $sourceDataType = '';


  public function setSource(Forminator_Google_Service_Dataflow_Source $source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
}

class Forminator_Google_Service_Dataflow_ReportWorkItemStatusRequest extends Forminator_Google_Collection
{
  protected $collection_key = 'workItemStatuses';
  protected $internal_gapi_mappings = array(
  );
  public $currentWorkerTime;
  protected $workItemStatusesType = 'Forminator_Google_Service_Dataflow_WorkItemStatus';
  protected $workItemStatusesDataType = 'array';
  public $workerId;


  public function setCurrentWorkerTime($currentWorkerTime)
  {
    $this->currentWorkerTime = $currentWorkerTime;
  }
  public function getCurrentWorkerTime()
  {
    return $this->currentWorkerTime;
  }
  public function setWorkItemStatuses($workItemStatuses)
  {
    $this->workItemStatuses = $workItemStatuses;
  }
  public function getWorkItemStatuses()
  {
    return $this->workItemStatuses;
  }
  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
  public function getWorkerId()
  {
    return $this->workerId;
  }
}

class Forminator_Google_Service_Dataflow_ReportWorkItemStatusResponse extends Forminator_Google_Collection
{
  protected $collection_key = 'workItemServiceStates';
  protected $internal_gapi_mappings = array(
  );
  protected $workItemServiceStatesType = 'Forminator_Google_Service_Dataflow_WorkItemServiceState';
  protected $workItemServiceStatesDataType = 'array';


  public function setWorkItemServiceStates($workItemServiceStates)
  {
    $this->workItemServiceStates = $workItemServiceStates;
  }
  public function getWorkItemServiceStates()
  {
    return $this->workItemServiceStates;
  }
}

class Forminator_Google_Service_Dataflow_ReportedParallelism extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $isInfinite;
  public $value;


  public function setIsInfinite($isInfinite)
  {
    $this->isInfinite = $isInfinite;
  }
  public function getIsInfinite()
  {
    return $this->isInfinite;
  }
  public function setValue($value)
  {
    $this->value = $value;
  }
  public function getValue()
  {
    return $this->value;
  }
}

class Forminator_Google_Service_Dataflow_SendWorkerMessagesRequest extends Forminator_Google_Collection
{
  protected $collection_key = 'workerMessages';
  protected $internal_gapi_mappings = array(
  );
  protected $workerMessagesType = 'Forminator_Google_Service_Dataflow_WorkerMessage';
  protected $workerMessagesDataType = 'array';


  public function setWorkerMessages($workerMessages)
  {
    $this->workerMessages = $workerMessages;
  }
  public function getWorkerMessages()
  {
    return $this->workerMessages;
  }
}

class Forminator_Google_Service_Dataflow_SendWorkerMessagesResponse extends Forminator_Google_Collection
{
  protected $collection_key = 'workerMessageResponses';
  protected $internal_gapi_mappings = array(
  );
  protected $workerMessageResponsesType = 'Forminator_Google_Service_Dataflow_WorkerMessageResponse';
  protected $workerMessageResponsesDataType = 'array';


  public function setWorkerMessageResponses($workerMessageResponses)
  {
    $this->workerMessageResponses = $workerMessageResponses;
  }
  public function getWorkerMessageResponses()
  {
    return $this->workerMessageResponses;
  }
}

class Forminator_Google_Service_Dataflow_SeqMapTask extends Forminator_Google_Collection
{
  protected $collection_key = 'outputInfos';
  protected $internal_gapi_mappings = array(
  );
  protected $inputsType = 'Forminator_Google_Service_Dataflow_SideInputInfo';
  protected $inputsDataType = 'array';
  public $name;
  protected $outputInfosType = 'Forminator_Google_Service_Dataflow_SeqMapTaskOutputInfo';
  protected $outputInfosDataType = 'array';
  public $stageName;
  public $systemName;
  public $userFn;


  public function setInputs($inputs)
  {
    $this->inputs = $inputs;
  }
  public function getInputs()
  {
    return $this->inputs;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setOutputInfos($outputInfos)
  {
    $this->outputInfos = $outputInfos;
  }
  public function getOutputInfos()
  {
    return $this->outputInfos;
  }
  public function setStageName($stageName)
  {
    $this->stageName = $stageName;
  }
  public function getStageName()
  {
    return $this->stageName;
  }
  public function setSystemName($systemName)
  {
    $this->systemName = $systemName;
  }
  public function getSystemName()
  {
    return $this->systemName;
  }
  public function setUserFn($userFn)
  {
    $this->userFn = $userFn;
  }
  public function getUserFn()
  {
    return $this->userFn;
  }
}

class Forminator_Google_Service_Dataflow_SeqMapTaskOutputInfo extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $sinkType = 'Forminator_Google_Service_Dataflow_Sink';
  protected $sinkDataType = '';
  public $tag;


  public function setSink(Forminator_Google_Service_Dataflow_Sink $sink)
  {
    $this->sink = $sink;
  }
  public function getSink()
  {
    return $this->sink;
  }
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  public function getTag()
  {
    return $this->tag;
  }
}

class Forminator_Google_Service_Dataflow_ShellTask extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $command;
  public $exitCode;


  public function setCommand($command)
  {
    $this->command = $command;
  }
  public function getCommand()
  {
    return $this->command;
  }
  public function setExitCode($exitCode)
  {
    $this->exitCode = $exitCode;
  }
  public function getExitCode()
  {
    return $this->exitCode;
  }
}

class Forminator_Google_Service_Dataflow_SideInputInfo extends Forminator_Google_Collection
{
  protected $collection_key = 'sources';
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  protected $sourcesType = 'Forminator_Google_Service_Dataflow_Source';
  protected $sourcesDataType = 'array';
  public $tag;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setSources($sources)
  {
    $this->sources = $sources;
  }
  public function getSources()
  {
    return $this->sources;
  }
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  public function getTag()
  {
    return $this->tag;
  }
}

class Forminator_Google_Service_Dataflow_Sink extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $codec;
  public $spec;


  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  public function getCodec()
  {
    return $this->codec;
  }
  public function setSpec($spec)
  {
    $this->spec = $spec;
  }
  public function getSpec()
  {
    return $this->spec;
  }
}

class Forminator_Google_Service_Dataflow_Source extends Forminator_Google_Collection
{
  protected $collection_key = 'baseSpecs';
  protected $internal_gapi_mappings = array(
  );
  public $baseSpecs;
  public $codec;
  public $doesNotNeedSplitting;
  protected $metadataType = 'Forminator_Google_Service_Dataflow_SourceMetadata';
  protected $metadataDataType = '';
  public $spec;


  public function setBaseSpecs($baseSpecs)
  {
    $this->baseSpecs = $baseSpecs;
  }
  public function getBaseSpecs()
  {
    return $this->baseSpecs;
  }
  public function setCodec($codec)
  {
    $this->codec = $codec;
  }
  public function getCodec()
  {
    return $this->codec;
  }
  public function setDoesNotNeedSplitting($doesNotNeedSplitting)
  {
    $this->doesNotNeedSplitting = $doesNotNeedSplitting;
  }
  public function getDoesNotNeedSplitting()
  {
    return $this->doesNotNeedSplitting;
  }
  public function setMetadata(Forminator_Google_Service_Dataflow_SourceMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setSpec($spec)
  {
    $this->spec = $spec;
  }
  public function getSpec()
  {
    return $this->spec;
  }
}

class Forminator_Google_Service_Dataflow_SourceFork extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $primaryType = 'Forminator_Google_Service_Dataflow_SourceSplitShard';
  protected $primaryDataType = '';
  protected $primarySourceType = 'Forminator_Google_Service_Dataflow_DerivedSource';
  protected $primarySourceDataType = '';
  protected $residualType = 'Forminator_Google_Service_Dataflow_SourceSplitShard';
  protected $residualDataType = '';
  protected $residualSourceType = 'Forminator_Google_Service_Dataflow_DerivedSource';
  protected $residualSourceDataType = '';


  public function setPrimary(Forminator_Google_Service_Dataflow_SourceSplitShard $primary)
  {
    $this->primary = $primary;
  }
  public function getPrimary()
  {
    return $this->primary;
  }
  public function setPrimarySource(Forminator_Google_Service_Dataflow_DerivedSource $primarySource)
  {
    $this->primarySource = $primarySource;
  }
  public function getPrimarySource()
  {
    return $this->primarySource;
  }
  public function setResidual(Forminator_Google_Service_Dataflow_SourceSplitShard $residual)
  {
    $this->residual = $residual;
  }
  public function getResidual()
  {
    return $this->residual;
  }
  public function setResidualSource(Forminator_Google_Service_Dataflow_DerivedSource $residualSource)
  {
    $this->residualSource = $residualSource;
  }
  public function getResidualSource()
  {
    return $this->residualSource;
  }
}

class Forminator_Google_Service_Dataflow_SourceGetMetadataRequest extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $sourceType = 'Forminator_Google_Service_Dataflow_Source';
  protected $sourceDataType = '';


  public function setSource(Forminator_Google_Service_Dataflow_Source $source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
}

class Forminator_Google_Service_Dataflow_SourceGetMetadataResponse extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $metadataType = 'Forminator_Google_Service_Dataflow_SourceMetadata';
  protected $metadataDataType = '';


  public function setMetadata(Forminator_Google_Service_Dataflow_SourceMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
}

class Forminator_Google_Service_Dataflow_SourceMetadata extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $estimatedSizeBytes;
  public $infinite;
  public $producesSortedKeys;


  public function setEstimatedSizeBytes($estimatedSizeBytes)
  {
    $this->estimatedSizeBytes = $estimatedSizeBytes;
  }
  public function getEstimatedSizeBytes()
  {
    return $this->estimatedSizeBytes;
  }
  public function setInfinite($infinite)
  {
    $this->infinite = $infinite;
  }
  public function getInfinite()
  {
    return $this->infinite;
  }
  public function setProducesSortedKeys($producesSortedKeys)
  {
    $this->producesSortedKeys = $producesSortedKeys;
  }
  public function getProducesSortedKeys()
  {
    return $this->producesSortedKeys;
  }
}

class Forminator_Google_Service_Dataflow_SourceOperationRequest extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $getMetadataType = 'Forminator_Google_Service_Dataflow_SourceGetMetadataRequest';
  protected $getMetadataDataType = '';
  protected $splitType = 'Forminator_Google_Service_Dataflow_SourceSplitRequest';
  protected $splitDataType = '';


  public function setGetMetadata(Forminator_Google_Service_Dataflow_SourceGetMetadataRequest $getMetadata)
  {
    $this->getMetadata = $getMetadata;
  }
  public function getGetMetadata()
  {
    return $this->getMetadata;
  }
  public function setSplit(Forminator_Google_Service_Dataflow_SourceSplitRequest $split)
  {
    $this->split = $split;
  }
  public function getSplit()
  {
    return $this->split;
  }
}

class Forminator_Google_Service_Dataflow_SourceOperationResponse extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $getMetadataType = 'Forminator_Google_Service_Dataflow_SourceGetMetadataResponse';
  protected $getMetadataDataType = '';
  protected $splitType = 'Forminator_Google_Service_Dataflow_SourceSplitResponse';
  protected $splitDataType = '';


  public function setGetMetadata(Forminator_Google_Service_Dataflow_SourceGetMetadataResponse $getMetadata)
  {
    $this->getMetadata = $getMetadata;
  }
  public function getGetMetadata()
  {
    return $this->getMetadata;
  }
  public function setSplit(Forminator_Google_Service_Dataflow_SourceSplitResponse $split)
  {
    $this->split = $split;
  }
  public function getSplit()
  {
    return $this->split;
  }
}

class Forminator_Google_Service_Dataflow_SourceSplitOptions extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $desiredBundleSizeBytes;
  public $desiredShardSizeBytes;


  public function setDesiredBundleSizeBytes($desiredBundleSizeBytes)
  {
    $this->desiredBundleSizeBytes = $desiredBundleSizeBytes;
  }
  public function getDesiredBundleSizeBytes()
  {
    return $this->desiredBundleSizeBytes;
  }
  public function setDesiredShardSizeBytes($desiredShardSizeBytes)
  {
    $this->desiredShardSizeBytes = $desiredShardSizeBytes;
  }
  public function getDesiredShardSizeBytes()
  {
    return $this->desiredShardSizeBytes;
  }
}

class Forminator_Google_Service_Dataflow_SourceSplitRequest extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $optionsType = 'Forminator_Google_Service_Dataflow_SourceSplitOptions';
  protected $optionsDataType = '';
  protected $sourceType = 'Forminator_Google_Service_Dataflow_Source';
  protected $sourceDataType = '';


  public function setOptions(Forminator_Google_Service_Dataflow_SourceSplitOptions $options)
  {
    $this->options = $options;
  }
  public function getOptions()
  {
    return $this->options;
  }
  public function setSource(Forminator_Google_Service_Dataflow_Source $source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
}

class Forminator_Google_Service_Dataflow_SourceSplitResponse extends Forminator_Google_Collection
{
  protected $collection_key = 'shards';
  protected $internal_gapi_mappings = array(
  );
  protected $bundlesType = 'Forminator_Google_Service_Dataflow_DerivedSource';
  protected $bundlesDataType = 'array';
  public $outcome;
  protected $shardsType = 'Forminator_Google_Service_Dataflow_SourceSplitShard';
  protected $shardsDataType = 'array';


  public function setBundles($bundles)
  {
    $this->bundles = $bundles;
  }
  public function getBundles()
  {
    return $this->bundles;
  }
  public function setOutcome($outcome)
  {
    $this->outcome = $outcome;
  }
  public function getOutcome()
  {
    return $this->outcome;
  }
  public function setShards($shards)
  {
    $this->shards = $shards;
  }
  public function getShards()
  {
    return $this->shards;
  }
}

class Forminator_Google_Service_Dataflow_SourceSplitShard extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $derivationMode;
  protected $sourceType = 'Forminator_Google_Service_Dataflow_Source';
  protected $sourceDataType = '';


  public function setDerivationMode($derivationMode)
  {
    $this->derivationMode = $derivationMode;
  }
  public function getDerivationMode()
  {
    return $this->derivationMode;
  }
  public function setSource(Forminator_Google_Service_Dataflow_Source $source)
  {
    $this->source = $source;
  }
  public function getSource()
  {
    return $this->source;
  }
}

class Forminator_Google_Service_Dataflow_StateFamilyConfig extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $isRead;
  public $stateFamily;


  public function setIsRead($isRead)
  {
    $this->isRead = $isRead;
  }
  public function getIsRead()
  {
    return $this->isRead;
  }
  public function setStateFamily($stateFamily)
  {
    $this->stateFamily = $stateFamily;
  }
  public function getStateFamily()
  {
    return $this->stateFamily;
  }
}

class Forminator_Google_Service_Dataflow_Status extends Forminator_Google_Collection
{
  protected $collection_key = 'details';
  protected $internal_gapi_mappings = array(
  );
  public $code;
  public $details;
  public $message;


  public function setCode($code)
  {
    $this->code = $code;
  }
  public function getCode()
  {
    return $this->code;
  }
  public function setDetails($details)
  {
    $this->details = $details;
  }
  public function getDetails()
  {
    return $this->details;
  }
  public function setMessage($message)
  {
    $this->message = $message;
  }
  public function getMessage()
  {
    return $this->message;
  }
}

class Forminator_Google_Service_Dataflow_Step extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $kind;
  public $name;
  public $properties;


  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setProperties($properties)
  {
    $this->properties = $properties;
  }
  public function getProperties()
  {
    return $this->properties;
  }
}

class Forminator_Google_Service_Dataflow_StreamLocation extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $customSourceLocationType = 'Forminator_Google_Service_Dataflow_CustomSourceLocation';
  protected $customSourceLocationDataType = '';
  protected $pubsubLocationType = 'Forminator_Google_Service_Dataflow_PubsubLocation';
  protected $pubsubLocationDataType = '';
  protected $sideInputLocationType = 'Forminator_Google_Service_Dataflow_StreamingSideInputLocation';
  protected $sideInputLocationDataType = '';
  protected $streamingStageLocationType = 'Forminator_Google_Service_Dataflow_StreamingStageLocation';
  protected $streamingStageLocationDataType = '';


  public function setCustomSourceLocation(Forminator_Google_Service_Dataflow_CustomSourceLocation $customSourceLocation)
  {
    $this->customSourceLocation = $customSourceLocation;
  }
  public function getCustomSourceLocation()
  {
    return $this->customSourceLocation;
  }
  public function setPubsubLocation(Forminator_Google_Service_Dataflow_PubsubLocation $pubsubLocation)
  {
    $this->pubsubLocation = $pubsubLocation;
  }
  public function getPubsubLocation()
  {
    return $this->pubsubLocation;
  }
  public function setSideInputLocation(Forminator_Google_Service_Dataflow_StreamingSideInputLocation $sideInputLocation)
  {
    $this->sideInputLocation = $sideInputLocation;
  }
  public function getSideInputLocation()
  {
    return $this->sideInputLocation;
  }
  public function setStreamingStageLocation(Forminator_Google_Service_Dataflow_StreamingStageLocation $streamingStageLocation)
  {
    $this->streamingStageLocation = $streamingStageLocation;
  }
  public function getStreamingStageLocation()
  {
    return $this->streamingStageLocation;
  }
}

class Forminator_Google_Service_Dataflow_StreamingComputationRanges extends Forminator_Google_Collection
{
  protected $collection_key = 'rangeAssignments';
  protected $internal_gapi_mappings = array(
  );
  public $computationId;
  protected $rangeAssignmentsType = 'Forminator_Google_Service_Dataflow_KeyRangeDataDiskAssignment';
  protected $rangeAssignmentsDataType = 'array';


  public function setComputationId($computationId)
  {
    $this->computationId = $computationId;
  }
  public function getComputationId()
  {
    return $this->computationId;
  }
  public function setRangeAssignments($rangeAssignments)
  {
    $this->rangeAssignments = $rangeAssignments;
  }
  public function getRangeAssignments()
  {
    return $this->rangeAssignments;
  }
}

class Forminator_Google_Service_Dataflow_StreamingComputationTask extends Forminator_Google_Collection
{
  protected $collection_key = 'dataDisks';
  protected $internal_gapi_mappings = array(
  );
  protected $computationRangesType = 'Forminator_Google_Service_Dataflow_StreamingComputationRanges';
  protected $computationRangesDataType = 'array';
  protected $dataDisksType = 'Forminator_Google_Service_Dataflow_MountedDataDisk';
  protected $dataDisksDataType = 'array';
  public $taskType;


  public function setComputationRanges($computationRanges)
  {
    $this->computationRanges = $computationRanges;
  }
  public function getComputationRanges()
  {
    return $this->computationRanges;
  }
  public function setDataDisks($dataDisks)
  {
    $this->dataDisks = $dataDisks;
  }
  public function getDataDisks()
  {
    return $this->dataDisks;
  }
  public function setTaskType($taskType)
  {
    $this->taskType = $taskType;
  }
  public function getTaskType()
  {
    return $this->taskType;
  }
}

class Forminator_Google_Service_Dataflow_StreamingSetupTask extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $drain;
  public $receiveWorkPort;
  protected $streamingComputationTopologyType = 'Forminator_Google_Service_Dataflow_TopologyConfig';
  protected $streamingComputationTopologyDataType = '';
  public $workerHarnessPort;


  public function setDrain($drain)
  {
    $this->drain = $drain;
  }
  public function getDrain()
  {
    return $this->drain;
  }
  public function setReceiveWorkPort($receiveWorkPort)
  {
    $this->receiveWorkPort = $receiveWorkPort;
  }
  public function getReceiveWorkPort()
  {
    return $this->receiveWorkPort;
  }
  public function setStreamingComputationTopology(Forminator_Google_Service_Dataflow_TopologyConfig $streamingComputationTopology)
  {
    $this->streamingComputationTopology = $streamingComputationTopology;
  }
  public function getStreamingComputationTopology()
  {
    return $this->streamingComputationTopology;
  }
  public function setWorkerHarnessPort($workerHarnessPort)
  {
    $this->workerHarnessPort = $workerHarnessPort;
  }
  public function getWorkerHarnessPort()
  {
    return $this->workerHarnessPort;
  }
}

class Forminator_Google_Service_Dataflow_StreamingSideInputLocation extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $stateFamily;
  public $tag;


  public function setStateFamily($stateFamily)
  {
    $this->stateFamily = $stateFamily;
  }
  public function getStateFamily()
  {
    return $this->stateFamily;
  }
  public function setTag($tag)
  {
    $this->tag = $tag;
  }
  public function getTag()
  {
    return $this->tag;
  }
}

class Forminator_Google_Service_Dataflow_StreamingStageLocation extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $streamId;


  public function setStreamId($streamId)
  {
    $this->streamId = $streamId;
  }
  public function getStreamId()
  {
    return $this->streamId;
  }
}

class Forminator_Google_Service_Dataflow_TaskRunnerSettings extends Forminator_Google_Collection
{
  protected $collection_key = 'oauthScopes';
  protected $internal_gapi_mappings = array(
  );
  public $alsologtostderr;
  public $baseTaskDir;
  public $baseUrl;
  public $commandlinesFileName;
  public $continueOnException;
  public $dataflowApiVersion;
  public $harnessCommand;
  public $languageHint;
  public $logDir;
  public $logToSerialconsole;
  public $logUploadLocation;
  public $oauthScopes;
  protected $parallelWorkerSettingsType = 'Forminator_Google_Service_Dataflow_WorkerSettings';
  protected $parallelWorkerSettingsDataType = '';
  public $streamingWorkerMainClass;
  public $taskGroup;
  public $taskUser;
  public $tempStoragePrefix;
  public $vmId;
  public $workflowFileName;


  public function setAlsologtostderr($alsologtostderr)
  {
    $this->alsologtostderr = $alsologtostderr;
  }
  public function getAlsologtostderr()
  {
    return $this->alsologtostderr;
  }
  public function setBaseTaskDir($baseTaskDir)
  {
    $this->baseTaskDir = $baseTaskDir;
  }
  public function getBaseTaskDir()
  {
    return $this->baseTaskDir;
  }
  public function setBaseUrl($baseUrl)
  {
    $this->baseUrl = $baseUrl;
  }
  public function getBaseUrl()
  {
    return $this->baseUrl;
  }
  public function setCommandlinesFileName($commandlinesFileName)
  {
    $this->commandlinesFileName = $commandlinesFileName;
  }
  public function getCommandlinesFileName()
  {
    return $this->commandlinesFileName;
  }
  public function setContinueOnException($continueOnException)
  {
    $this->continueOnException = $continueOnException;
  }
  public function getContinueOnException()
  {
    return $this->continueOnException;
  }
  public function setDataflowApiVersion($dataflowApiVersion)
  {
    $this->dataflowApiVersion = $dataflowApiVersion;
  }
  public function getDataflowApiVersion()
  {
    return $this->dataflowApiVersion;
  }
  public function setHarnessCommand($harnessCommand)
  {
    $this->harnessCommand = $harnessCommand;
  }
  public function getHarnessCommand()
  {
    return $this->harnessCommand;
  }
  public function setLanguageHint($languageHint)
  {
    $this->languageHint = $languageHint;
  }
  public function getLanguageHint()
  {
    return $this->languageHint;
  }
  public function setLogDir($logDir)
  {
    $this->logDir = $logDir;
  }
  public function getLogDir()
  {
    return $this->logDir;
  }
  public function setLogToSerialconsole($logToSerialconsole)
  {
    $this->logToSerialconsole = $logToSerialconsole;
  }
  public function getLogToSerialconsole()
  {
    return $this->logToSerialconsole;
  }
  public function setLogUploadLocation($logUploadLocation)
  {
    $this->logUploadLocation = $logUploadLocation;
  }
  public function getLogUploadLocation()
  {
    return $this->logUploadLocation;
  }
  public function setOauthScopes($oauthScopes)
  {
    $this->oauthScopes = $oauthScopes;
  }
  public function getOauthScopes()
  {
    return $this->oauthScopes;
  }
  public function setParallelWorkerSettings(Forminator_Google_Service_Dataflow_WorkerSettings $parallelWorkerSettings)
  {
    $this->parallelWorkerSettings = $parallelWorkerSettings;
  }
  public function getParallelWorkerSettings()
  {
    return $this->parallelWorkerSettings;
  }
  public function setStreamingWorkerMainClass($streamingWorkerMainClass)
  {
    $this->streamingWorkerMainClass = $streamingWorkerMainClass;
  }
  public function getStreamingWorkerMainClass()
  {
    return $this->streamingWorkerMainClass;
  }
  public function setTaskGroup($taskGroup)
  {
    $this->taskGroup = $taskGroup;
  }
  public function getTaskGroup()
  {
    return $this->taskGroup;
  }
  public function setTaskUser($taskUser)
  {
    $this->taskUser = $taskUser;
  }
  public function getTaskUser()
  {
    return $this->taskUser;
  }
  public function setTempStoragePrefix($tempStoragePrefix)
  {
    $this->tempStoragePrefix = $tempStoragePrefix;
  }
  public function getTempStoragePrefix()
  {
    return $this->tempStoragePrefix;
  }
  public function setVmId($vmId)
  {
    $this->vmId = $vmId;
  }
  public function getVmId()
  {
    return $this->vmId;
  }
  public function setWorkflowFileName($workflowFileName)
  {
    $this->workflowFileName = $workflowFileName;
  }
  public function getWorkflowFileName()
  {
    return $this->workflowFileName;
  }
}

class Forminator_Google_Service_Dataflow_TopologyConfig extends Forminator_Google_Collection
{
  protected $collection_key = 'dataDiskAssignments';
  protected $internal_gapi_mappings = array(
  );
  protected $computationsType = 'Forminator_Google_Service_Dataflow_ComputationTopology';
  protected $computationsDataType = 'array';
  protected $dataDiskAssignmentsType = 'Forminator_Google_Service_Dataflow_DataDiskAssignment';
  protected $dataDiskAssignmentsDataType = 'array';
  public $forwardingKeyBits;
  public $userStageToComputationNameMap;


  public function setComputations($computations)
  {
    $this->computations = $computations;
  }
  public function getComputations()
  {
    return $this->computations;
  }
  public function setDataDiskAssignments($dataDiskAssignments)
  {
    $this->dataDiskAssignments = $dataDiskAssignments;
  }
  public function getDataDiskAssignments()
  {
    return $this->dataDiskAssignments;
  }
  public function setForwardingKeyBits($forwardingKeyBits)
  {
    $this->forwardingKeyBits = $forwardingKeyBits;
  }
  public function getForwardingKeyBits()
  {
    return $this->forwardingKeyBits;
  }
  public function setUserStageToComputationNameMap($userStageToComputationNameMap)
  {
    $this->userStageToComputationNameMap = $userStageToComputationNameMap;
  }
  public function getUserStageToComputationNameMap()
  {
    return $this->userStageToComputationNameMap;
  }
}

class Forminator_Google_Service_Dataflow_WorkItem extends Forminator_Google_Collection
{
  protected $collection_key = 'packages';
  protected $internal_gapi_mappings = array(
  );
  public $configuration;
  public $id;
  public $initialReportIndex;
  public $jobId;
  public $leaseExpireTime;
  protected $mapTaskType = 'Forminator_Google_Service_Dataflow_MapTask';
  protected $mapTaskDataType = '';
  protected $packagesType = 'Forminator_Google_Service_Dataflow_Package';
  protected $packagesDataType = 'array';
  public $projectId;
  public $reportStatusInterval;
  protected $seqMapTaskType = 'Forminator_Google_Service_Dataflow_SeqMapTask';
  protected $seqMapTaskDataType = '';
  protected $shellTaskType = 'Forminator_Google_Service_Dataflow_ShellTask';
  protected $shellTaskDataType = '';
  protected $sourceOperationTaskType = 'Forminator_Google_Service_Dataflow_SourceOperationRequest';
  protected $sourceOperationTaskDataType = '';
  protected $streamingComputationTaskType = 'Forminator_Google_Service_Dataflow_StreamingComputationTask';
  protected $streamingComputationTaskDataType = '';
  protected $streamingSetupTaskType = 'Forminator_Google_Service_Dataflow_StreamingSetupTask';
  protected $streamingSetupTaskDataType = '';


  public function setConfiguration($configuration)
  {
    $this->configuration = $configuration;
  }
  public function getConfiguration()
  {
    return $this->configuration;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
  public function getId()
  {
    return $this->id;
  }
  public function setInitialReportIndex($initialReportIndex)
  {
    $this->initialReportIndex = $initialReportIndex;
  }
  public function getInitialReportIndex()
  {
    return $this->initialReportIndex;
  }
  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }
  public function getJobId()
  {
    return $this->jobId;
  }
  public function setLeaseExpireTime($leaseExpireTime)
  {
    $this->leaseExpireTime = $leaseExpireTime;
  }
  public function getLeaseExpireTime()
  {
    return $this->leaseExpireTime;
  }
  public function setMapTask(Forminator_Google_Service_Dataflow_MapTask $mapTask)
  {
    $this->mapTask = $mapTask;
  }
  public function getMapTask()
  {
    return $this->mapTask;
  }
  public function setPackages($packages)
  {
    $this->packages = $packages;
  }
  public function getPackages()
  {
    return $this->packages;
  }
  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }
  public function getProjectId()
  {
    return $this->projectId;
  }
  public function setReportStatusInterval($reportStatusInterval)
  {
    $this->reportStatusInterval = $reportStatusInterval;
  }
  public function getReportStatusInterval()
  {
    return $this->reportStatusInterval;
  }
  public function setSeqMapTask(Forminator_Google_Service_Dataflow_SeqMapTask $seqMapTask)
  {
    $this->seqMapTask = $seqMapTask;
  }
  public function getSeqMapTask()
  {
    return $this->seqMapTask;
  }
  public function setShellTask(Forminator_Google_Service_Dataflow_ShellTask $shellTask)
  {
    $this->shellTask = $shellTask;
  }
  public function getShellTask()
  {
    return $this->shellTask;
  }
  public function setSourceOperationTask(Forminator_Google_Service_Dataflow_SourceOperationRequest $sourceOperationTask)
  {
    $this->sourceOperationTask = $sourceOperationTask;
  }
  public function getSourceOperationTask()
  {
    return $this->sourceOperationTask;
  }
  public function setStreamingComputationTask(Forminator_Google_Service_Dataflow_StreamingComputationTask $streamingComputationTask)
  {
    $this->streamingComputationTask = $streamingComputationTask;
  }
  public function getStreamingComputationTask()
  {
    return $this->streamingComputationTask;
  }
  public function setStreamingSetupTask(Forminator_Google_Service_Dataflow_StreamingSetupTask $streamingSetupTask)
  {
    $this->streamingSetupTask = $streamingSetupTask;
  }
  public function getStreamingSetupTask()
  {
    return $this->streamingSetupTask;
  }
}

class Forminator_Google_Service_Dataflow_WorkItemServiceState extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $harnessData;
  public $leaseExpireTime;
  public $nextReportIndex;
  public $reportStatusInterval;
  protected $splitRequestType = 'Forminator_Google_Service_Dataflow_ApproximateSplitRequest';
  protected $splitRequestDataType = '';
  protected $suggestedStopPointType = 'Forminator_Google_Service_Dataflow_ApproximateProgress';
  protected $suggestedStopPointDataType = '';
  protected $suggestedStopPositionType = 'Forminator_Google_Service_Dataflow_Position';
  protected $suggestedStopPositionDataType = '';


  public function setHarnessData($harnessData)
  {
    $this->harnessData = $harnessData;
  }
  public function getHarnessData()
  {
    return $this->harnessData;
  }
  public function setLeaseExpireTime($leaseExpireTime)
  {
    $this->leaseExpireTime = $leaseExpireTime;
  }
  public function getLeaseExpireTime()
  {
    return $this->leaseExpireTime;
  }
  public function setNextReportIndex($nextReportIndex)
  {
    $this->nextReportIndex = $nextReportIndex;
  }
  public function getNextReportIndex()
  {
    return $this->nextReportIndex;
  }
  public function setReportStatusInterval($reportStatusInterval)
  {
    $this->reportStatusInterval = $reportStatusInterval;
  }
  public function getReportStatusInterval()
  {
    return $this->reportStatusInterval;
  }
  public function setSplitRequest(Forminator_Google_Service_Dataflow_ApproximateSplitRequest $splitRequest)
  {
    $this->splitRequest = $splitRequest;
  }
  public function getSplitRequest()
  {
    return $this->splitRequest;
  }
  public function setSuggestedStopPoint(Forminator_Google_Service_Dataflow_ApproximateProgress $suggestedStopPoint)
  {
    $this->suggestedStopPoint = $suggestedStopPoint;
  }
  public function getSuggestedStopPoint()
  {
    return $this->suggestedStopPoint;
  }
  public function setSuggestedStopPosition(Forminator_Google_Service_Dataflow_Position $suggestedStopPosition)
  {
    $this->suggestedStopPosition = $suggestedStopPosition;
  }
  public function getSuggestedStopPosition()
  {
    return $this->suggestedStopPosition;
  }
}

class Forminator_Google_Service_Dataflow_WorkItemStatus extends Forminator_Google_Collection
{
  protected $collection_key = 'metricUpdates';
  protected $internal_gapi_mappings = array(
  );
  public $completed;
  protected $dynamicSourceSplitType = 'Forminator_Google_Service_Dataflow_DynamicSourceSplit';
  protected $dynamicSourceSplitDataType = '';
  protected $errorsType = 'Forminator_Google_Service_Dataflow_Status';
  protected $errorsDataType = 'array';
  protected $metricUpdatesType = 'Forminator_Google_Service_Dataflow_MetricUpdate';
  protected $metricUpdatesDataType = 'array';
  protected $progressType = 'Forminator_Google_Service_Dataflow_ApproximateProgress';
  protected $progressDataType = '';
  public $reportIndex;
  protected $reportedProgressType = 'Forminator_Google_Service_Dataflow_ApproximateReportedProgress';
  protected $reportedProgressDataType = '';
  public $requestedLeaseDuration;
  protected $sourceForkType = 'Forminator_Google_Service_Dataflow_SourceFork';
  protected $sourceForkDataType = '';
  protected $sourceOperationResponseType = 'Forminator_Google_Service_Dataflow_SourceOperationResponse';
  protected $sourceOperationResponseDataType = '';
  protected $stopPositionType = 'Forminator_Google_Service_Dataflow_Position';
  protected $stopPositionDataType = '';
  public $workItemId;


  public function setCompleted($completed)
  {
    $this->completed = $completed;
  }
  public function getCompleted()
  {
    return $this->completed;
  }
  public function setDynamicSourceSplit(Forminator_Google_Service_Dataflow_DynamicSourceSplit $dynamicSourceSplit)
  {
    $this->dynamicSourceSplit = $dynamicSourceSplit;
  }
  public function getDynamicSourceSplit()
  {
    return $this->dynamicSourceSplit;
  }
  public function setErrors($errors)
  {
    $this->errors = $errors;
  }
  public function getErrors()
  {
    return $this->errors;
  }
  public function setMetricUpdates($metricUpdates)
  {
    $this->metricUpdates = $metricUpdates;
  }
  public function getMetricUpdates()
  {
    return $this->metricUpdates;
  }
  public function setProgress(Forminator_Google_Service_Dataflow_ApproximateProgress $progress)
  {
    $this->progress = $progress;
  }
  public function getProgress()
  {
    return $this->progress;
  }
  public function setReportIndex($reportIndex)
  {
    $this->reportIndex = $reportIndex;
  }
  public function getReportIndex()
  {
    return $this->reportIndex;
  }
  public function setReportedProgress(Forminator_Google_Service_Dataflow_ApproximateReportedProgress $reportedProgress)
  {
    $this->reportedProgress = $reportedProgress;
  }
  public function getReportedProgress()
  {
    return $this->reportedProgress;
  }
  public function setRequestedLeaseDuration($requestedLeaseDuration)
  {
    $this->requestedLeaseDuration = $requestedLeaseDuration;
  }
  public function getRequestedLeaseDuration()
  {
    return $this->requestedLeaseDuration;
  }
  public function setSourceFork(Forminator_Google_Service_Dataflow_SourceFork $sourceFork)
  {
    $this->sourceFork = $sourceFork;
  }
  public function getSourceFork()
  {
    return $this->sourceFork;
  }
  public function setSourceOperationResponse(Forminator_Google_Service_Dataflow_SourceOperationResponse $sourceOperationResponse)
  {
    $this->sourceOperationResponse = $sourceOperationResponse;
  }
  public function getSourceOperationResponse()
  {
    return $this->sourceOperationResponse;
  }
  public function setStopPosition(Forminator_Google_Service_Dataflow_Position $stopPosition)
  {
    $this->stopPosition = $stopPosition;
  }
  public function getStopPosition()
  {
    return $this->stopPosition;
  }
  public function setWorkItemId($workItemId)
  {
    $this->workItemId = $workItemId;
  }
  public function getWorkItemId()
  {
    return $this->workItemId;
  }
}

class Forminator_Google_Service_Dataflow_WorkerHealthReport extends Forminator_Google_Collection
{
  protected $collection_key = 'pods';
  protected $internal_gapi_mappings = array(
  );
  public $pods;
  public $reportInterval;
  public $vmIsHealthy;
  public $vmStartupTime;


  public function setPods($pods)
  {
    $this->pods = $pods;
  }
  public function getPods()
  {
    return $this->pods;
  }
  public function setReportInterval($reportInterval)
  {
    $this->reportInterval = $reportInterval;
  }
  public function getReportInterval()
  {
    return $this->reportInterval;
  }
  public function setVmIsHealthy($vmIsHealthy)
  {
    $this->vmIsHealthy = $vmIsHealthy;
  }
  public function getVmIsHealthy()
  {
    return $this->vmIsHealthy;
  }
  public function setVmStartupTime($vmStartupTime)
  {
    $this->vmStartupTime = $vmStartupTime;
  }
  public function getVmStartupTime()
  {
    return $this->vmStartupTime;
  }
}

class Forminator_Google_Service_Dataflow_WorkerHealthReportResponse extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $reportInterval;


  public function setReportInterval($reportInterval)
  {
    $this->reportInterval = $reportInterval;
  }
  public function getReportInterval()
  {
    return $this->reportInterval;
  }
}

class Forminator_Google_Service_Dataflow_WorkerMessage extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $labels;
  public $time;
  protected $workerHealthReportType = 'Forminator_Google_Service_Dataflow_WorkerHealthReport';
  protected $workerHealthReportDataType = '';
  protected $workerMessageCodeType = 'Forminator_Google_Service_Dataflow_WorkerMessageCode';
  protected $workerMessageCodeDataType = '';


  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
  public function setTime($time)
  {
    $this->time = $time;
  }
  public function getTime()
  {
    return $this->time;
  }
  public function setWorkerHealthReport(Forminator_Google_Service_Dataflow_WorkerHealthReport $workerHealthReport)
  {
    $this->workerHealthReport = $workerHealthReport;
  }
  public function getWorkerHealthReport()
  {
    return $this->workerHealthReport;
  }
  public function setWorkerMessageCode(Forminator_Google_Service_Dataflow_WorkerMessageCode $workerMessageCode)
  {
    $this->workerMessageCode = $workerMessageCode;
  }
  public function getWorkerMessageCode()
  {
    return $this->workerMessageCode;
  }
}

class Forminator_Google_Service_Dataflow_WorkerMessageCode extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $code;
  public $parameters;


  public function setCode($code)
  {
    $this->code = $code;
  }
  public function getCode()
  {
    return $this->code;
  }
  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }
  public function getParameters()
  {
    return $this->parameters;
  }
}

class Forminator_Google_Service_Dataflow_WorkerMessageResponse extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $workerHealthReportResponseType = 'Forminator_Google_Service_Dataflow_WorkerHealthReportResponse';
  protected $workerHealthReportResponseDataType = '';


  public function setWorkerHealthReportResponse(Forminator_Google_Service_Dataflow_WorkerHealthReportResponse $workerHealthReportResponse)
  {
    $this->workerHealthReportResponse = $workerHealthReportResponse;
  }
  public function getWorkerHealthReportResponse()
  {
    return $this->workerHealthReportResponse;
  }
}

class Forminator_Google_Service_Dataflow_WorkerPool extends Forminator_Google_Collection
{
  protected $collection_key = 'packages';
  protected $internal_gapi_mappings = array(
  );
  protected $autoscalingSettingsType = 'Forminator_Google_Service_Dataflow_AutoscalingSettings';
  protected $autoscalingSettingsDataType = '';
  protected $dataDisksType = 'Forminator_Google_Service_Dataflow_Disk';
  protected $dataDisksDataType = 'array';
  public $defaultPackageSet;
  public $diskSizeGb;
  public $diskSourceImage;
  public $diskType;
  public $kind;
  public $machineType;
  public $metadata;
  public $network;
  public $numWorkers;
  public $onHostMaintenance;
  protected $packagesType = 'Forminator_Google_Service_Dataflow_Package';
  protected $packagesDataType = 'array';
  public $poolArgs;
  protected $taskrunnerSettingsType = 'Forminator_Google_Service_Dataflow_TaskRunnerSettings';
  protected $taskrunnerSettingsDataType = '';
  public $teardownPolicy;
  public $zone;


  public function setAutoscalingSettings(Forminator_Google_Service_Dataflow_AutoscalingSettings $autoscalingSettings)
  {
    $this->autoscalingSettings = $autoscalingSettings;
  }
  public function getAutoscalingSettings()
  {
    return $this->autoscalingSettings;
  }
  public function setDataDisks($dataDisks)
  {
    $this->dataDisks = $dataDisks;
  }
  public function getDataDisks()
  {
    return $this->dataDisks;
  }
  public function setDefaultPackageSet($defaultPackageSet)
  {
    $this->defaultPackageSet = $defaultPackageSet;
  }
  public function getDefaultPackageSet()
  {
    return $this->defaultPackageSet;
  }
  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }
  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
  }
  public function setDiskSourceImage($diskSourceImage)
  {
    $this->diskSourceImage = $diskSourceImage;
  }
  public function getDiskSourceImage()
  {
    return $this->diskSourceImage;
  }
  public function setDiskType($diskType)
  {
    $this->diskType = $diskType;
  }
  public function getDiskType()
  {
    return $this->diskType;
  }
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  public function getKind()
  {
    return $this->kind;
  }
  public function setMachineType($machineType)
  {
    $this->machineType = $machineType;
  }
  public function getMachineType()
  {
    return $this->machineType;
  }
  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }
  public function getMetadata()
  {
    return $this->metadata;
  }
  public function setNetwork($network)
  {
    $this->network = $network;
  }
  public function getNetwork()
  {
    return $this->network;
  }
  public function setNumWorkers($numWorkers)
  {
    $this->numWorkers = $numWorkers;
  }
  public function getNumWorkers()
  {
    return $this->numWorkers;
  }
  public function setOnHostMaintenance($onHostMaintenance)
  {
    $this->onHostMaintenance = $onHostMaintenance;
  }
  public function getOnHostMaintenance()
  {
    return $this->onHostMaintenance;
  }
  public function setPackages($packages)
  {
    $this->packages = $packages;
  }
  public function getPackages()
  {
    return $this->packages;
  }
  public function setPoolArgs($poolArgs)
  {
    $this->poolArgs = $poolArgs;
  }
  public function getPoolArgs()
  {
    return $this->poolArgs;
  }
  public function setTaskrunnerSettings(Forminator_Google_Service_Dataflow_TaskRunnerSettings $taskrunnerSettings)
  {
    $this->taskrunnerSettings = $taskrunnerSettings;
  }
  public function getTaskrunnerSettings()
  {
    return $this->taskrunnerSettings;
  }
  public function setTeardownPolicy($teardownPolicy)
  {
    $this->teardownPolicy = $teardownPolicy;
  }
  public function getTeardownPolicy()
  {
    return $this->teardownPolicy;
  }
  public function setZone($zone)
  {
    $this->zone = $zone;
  }
  public function getZone()
  {
    return $this->zone;
  }
}

class Forminator_Google_Service_Dataflow_WorkerSettings extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  public $baseUrl;
  public $reportingEnabled;
  public $servicePath;
  public $shuffleServicePath;
  public $tempStoragePrefix;
  public $workerId;


  public function setBaseUrl($baseUrl)
  {
    $this->baseUrl = $baseUrl;
  }
  public function getBaseUrl()
  {
    return $this->baseUrl;
  }
  public function setReportingEnabled($reportingEnabled)
  {
    $this->reportingEnabled = $reportingEnabled;
  }
  public function getReportingEnabled()
  {
    return $this->reportingEnabled;
  }
  public function setServicePath($servicePath)
  {
    $this->servicePath = $servicePath;
  }
  public function getServicePath()
  {
    return $this->servicePath;
  }
  public function setShuffleServicePath($shuffleServicePath)
  {
    $this->shuffleServicePath = $shuffleServicePath;
  }
  public function getShuffleServicePath()
  {
    return $this->shuffleServicePath;
  }
  public function setTempStoragePrefix($tempStoragePrefix)
  {
    $this->tempStoragePrefix = $tempStoragePrefix;
  }
  public function getTempStoragePrefix()
  {
    return $this->tempStoragePrefix;
  }
  public function setWorkerId($workerId)
  {
    $this->workerId = $workerId;
  }
  public function getWorkerId()
  {
    return $this->workerId;
  }
}

class Forminator_Google_Service_Dataflow_WriteInstruction extends Forminator_Google_Model
{
  protected $internal_gapi_mappings = array(
  );
  protected $inputType = 'Forminator_Google_Service_Dataflow_InstructionInput';
  protected $inputDataType = '';
  protected $sinkType = 'Forminator_Google_Service_Dataflow_Sink';
  protected $sinkDataType = '';


  public function setInput(Forminator_Google_Service_Dataflow_InstructionInput $input)
  {
    $this->input = $input;
  }
  public function getInput()
  {
    return $this->input;
  }
  public function setSink(Forminator_Google_Service_Dataflow_Sink $sink)
  {
    $this->sink = $sink;
  }
  public function getSink()
  {
    return $this->sink;
  }
}
