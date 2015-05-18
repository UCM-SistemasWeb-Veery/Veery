<?php
// Call set_include_path() as needed to point to your client library.
use google\client;
use google\service\youtube;
use Carbon\Carbon;

/*
 * You can acquire an OAuth 2.0 client ID and client secret from the
 * {{ Google Cloud Console }} <{{ https://cloud.google.com/console }}>
 * For more information about using OAuth 2.0 to access Google APIs, please see:
 * <https://developers.google.com/youtube/v3/guides/authentication>
 * Please ensure that you have enabled the YouTube Data API for your project.
 */
$OAUTH2_CLIENT_ID = '815856011138-a1lvn5i7a5t7cu86e9aicc3h0f3gio9l.apps.googleusercontent.com';
$OAUTH2_CLIENT_SECRET = 'wuq8o_sZdTTvN7mUIdY8qv6z';
$client = new Google_Client();
$client->setClientId($OAUTH2_CLIENT_ID);
$client->setClientSecret($OAUTH2_CLIENT_SECRET);
$client->setScopes('https://www.googleapis.com/auth/youtube');
$redirect = filter_var('http://' . $_SERVER['HTTP_HOST'] . '/start-broadcast',
    FILTER_SANITIZE_URL);
$client->setRedirectUri($redirect);
// Define an object that will be used to make all API requests.
$youtube = new Google_Service_YouTube($client);
if (isset($_GET['code'])) {
  if (strval($_SESSION['state']) !== strval($_GET['state'])) {
    die('The session state did not match.');
  }
  $client->authenticate($_GET['code']);
  $_SESSION['token'] = $client->getAccessToken();
  header('Location: ' . $redirect);
}
if (isset($_SESSION['token'])) {
  $client->setAccessToken($_SESSION['token']);
}
// Check to ensure that the access token was successfully acquired.
if ($client->getAccessToken()) {
  try {
    // Create an object for the liveBroadcast resource's snippet. Specify values
    // for the snippet's title, scheduled start time, and scheduled end time.
    $broadcastSnippet = new Google_Service_YouTube_LiveBroadcastSnippet();
    $broadcastSnippet->setTitle('New Broadcast');
    $broadcastSnippet->setScheduledStartTime(Carbon::now()->toIso8601String());
    $broadcastSnippet->setScheduledEndTime(Carbon::now()->addMinutes(15)->toIso8601String());
    // Create an object for the liveBroadcast resource's status, and set the
    // broadcast's status to "private".
    $status = new Google_Service_YouTube_LiveBroadcastStatus();
    $status->setPrivacyStatus('public');
    // Create the API request that inserts the liveBroadcast resource.
    $broadcastInsert = new Google_Service_YouTube_LiveBroadcast();
    $broadcastInsert->setSnippet($broadcastSnippet);
    $broadcastInsert->setStatus($status);
    $broadcastInsert->setKind('youtube#liveBroadcast');
    // Execute the request and return an object that contains information
    // about the new broadcast.
    $broadcastsResponse = $youtube->liveBroadcasts->insert('snippet,status',
        $broadcastInsert, array());
    // Create an object for the liveStream resource's snippet. Specify a value
    // for the snippet's title.
    $streamSnippet = new Google_Service_YouTube_LiveStreamSnippet();
    $streamSnippet->setTitle('New Stream');
    // Create an object for content distribution network details for the live
    // stream and specify the stream's format and ingestion type.
    $cdn = new Google_Service_YouTube_CdnSettings();
    $cdn->setFormat("1080p");
    $cdn->setIngestionType('rtmp');
    // Create the API request that inserts the liveStream resource.
    $streamInsert = new Google_Service_YouTube_LiveStream();
    $streamInsert->setSnippet($streamSnippet);
    $streamInsert->setCdn($cdn);
    $streamInsert->setKind('youtube#liveStream');
    // Execute the request and return an object that contains information
    // about the new stream.
    $streamsResponse = $youtube->liveStreams->insert('snippet,cdn',
        $streamInsert, array());
    // Bind the broadcast to the live stream.
    $bindBroadcastResponse = $youtube->liveBroadcasts->bind(
        $broadcastsResponse['id'],'id,contentDetails',
        array(
            'streamId' => $streamsResponse['id'],
        ));
    $htmlBody = '';
    $htmlBody .= "<h3>Added Broadcast</h3><ul>";
    $htmlBody .= sprintf('<li>%s published at %s (%s)</li>',
        $broadcastsResponse['snippet']['title'],
        $broadcastsResponse['snippet']['publishedAt'],
        $broadcastsResponse['id']);
    $htmlBody .= '</ul>';
    $htmlBody .= "<h3>Added Stream</h3><ul>";
    $htmlBody .= sprintf('<li>%s (%s)</li>',
        $streamsResponse['snippet']['title'],
        $streamsResponse['id']);
    $htmlBody .= '</ul>';
    $htmlBody .= "<h3>Bound Broadcast</h3><ul>";
    $htmlBody .= sprintf('<li>Broadcast (%s) was bound to stream (%s).</li>',
        $bindBroadcastResponse['id'],
        $bindBroadcastResponse['contentDetails']['boundStreamId']);
    $htmlBody .= '</ul>';
    $htmlBody .= sprintf('<iframe width="560" height="315" src="https://www.youtube.com/embed/(%s)" frameborder="0" allowfullscreen></iframe>',$bindBroadcastResponse['id']);
  } catch (Google_ServiceException $e) {
    $htmlBody == sprintf('<p>A service error occurred: <code>%s</code></p>',
        htmlspecialchars($e->getMessage()));
  } catch (Google_Exception $e) {
    $htmlBody = sprintf('<p>An client error occurred: <code>%s</code></p>',
        htmlspecialchars($e->getMessage()));
  }
  $_SESSION['token'] = $client->getAccessToken();


  
} else {
  // If the user hasn't authorized the app, initiate the OAuth flow
  $state = mt_rand();
  $client->setState($state);
  $_SESSION['state'] = $state;
  $authUrl = $client->createAuthUrl();
  $htmlBody = <<<END
  <h3>Authorization Required</h3>
  <p>You need to <a href="$authUrl">authorize access</a> before proceeding.<p>
END;
}
?>
      <div class="col col-10" id="page-handler">
        <!-- row video -->
        <div class="row">
          <div class="col col-8 col-offset-2">
            <h3>Directo de artista X</h3>
            <div class="videoWrapper col col-10 col-offset-1">
              <?php if(isset($htmlBody)) {echo $htmlBody;}?>
            </div>
          </div>                                
        </div>
        <!-- ./ row video -->
        <!-- row chat-->
        <div class="row">
          <div class="col col-8 col-offset-2">
            <!--<ul class="ul-plain">-->
            <div class="module medium">
              <ul id="chat-messages">
                <li><span class="fa fa-user"></span> Usuario 1: ¡Qué bien están tocando!</li>
                <li><span class="fa fa-user"></span> Usuario 2: Se nota que han ensayado mucho...</li>
                <li><span class="fa fa-user"></span> Usuario 1: Hace un año estaban más verdes</li>
                <li><span class="fa fa-user"></span> Usuario 3: Pues a mi me parece un rollo... :(</li>
              </ul>
            </div>
            
          </div>
        </div>
        <!-- ./ row chat-->
        <!-- row enviar comentario -->
        <div class="row">
          <div class="col col-8 col-offset-2">
            <form action="procesa_comentario.php" method="post">
              <!--<div class="comment-wrapper">
                <input class="comment-field" type="text" name="texto_mensaje" value="Mensaje...">
                <input class="comment-button" type="submit" name="enviar" value="Enviar">
              </div>-->
              <div>
                <input class="btn inverse col-8" type="text" name="texto_mensaje" placeholder="Mensaje...">
                <input class="btn primary col-3"type="submit" name="enviar" value="Enviar">
              </div>
            </form>
          </div>
        </div>                                
        <!-- ./ row enviar comentario -->       
      </div>
