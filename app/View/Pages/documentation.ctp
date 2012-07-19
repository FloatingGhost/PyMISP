<div class="index">
<div class="toc"></div>

<hr/>
<h2>Layout and features</h2>
<h3>Main page:</h3>
<p>The main page lists the events stored on the
site. See data structure section for further details.</p>
<p>The <b>site PGP public key</b> and <b>log-out
button</b> are at the bottom of the page and will be accessible in
any page of the site.</p>
<h3>Left Menu</h3>
<p>The left menu allows the user navigating to the different features/pages of the site:</p>
<ul>
	<li><em>New Event:</em>
	    <p>Allow user to create a new event. See How to share a malware signatures 
	    section for further details.</p></li>
	<li><em>List Events: </em>
    	<p>List all events and allows users to </p>
    	<ul>
    	    <li>display the details of the events</li>
    	    <li>contact the publishing party of an even by clicking <b>Contact Reporter </b>button in the Event page.</li>
    	    <li>Modify or delete an event and attributes you have imported.</li>
    	</ul>
    	<p></p></li>
	<li><em>List Attributes:</em>
	    <p>Lists all attributes cross events.</p></li>
	<li><em>Search Attribute:</em>
    	<p>You can search for attributes based on key words
    	and apply a filtering based on the category and or attribute type.</p></li>
	<li><em>Export:</em>
    	<p>Different format are supported: XML (all or per
    	event), text (all or per attribute type), and IDS format. Note that
    	only the attributes that have been selected to be in the part of IDS
    	will be included in this latter.</p></li>
	<li><em>News:</em>
	    <p>Provide the latest news regarding the site like last changes.</p></li>
	<li><em>My Profile:</em>
    	<p>Allows to setup the user profile:</p>
    	<ul>
    		<li>email address to which new events will be sent,</li>
    		<li>the AuthKey used to automate the export of events/attributes from the application
    		(see Export),</li>
    		<li>NIDS starting SID,</li>
    		<li>PGP public key used to encrypt the events sent by email</li>
    	</ul>
    	<p></p></li>
	<li><em>Member List</em>
	    <p>Provide statstics about the site.</p></li>
	<li><em>User Guide</em>
	    <p>Displays this document.</p></li>
	<li><em>Terms & Conditions</em>
	    <p>Defines terms of use of this platform.</p></li>
	<li><em>List Servers</em>
	    <p>Displays a list of servers that the user synchronizes his account to.</p></li>
</ul>


<h2><a name="how_to_share"></A>How to share a malware/attack attributes</h2>
<h3>Data structure</h3>
<p>The following diagram depicts the data structure to store malware signatures.</p>
<p><img src="/img/doc/data-structure.gif"></p>
<ul>
	<li>An <em>Event</em> is a containers that hosts
	one or more <em>attributes</em> of a malware. This is the main data
	structure that host the signatures of a malware. An event is
	identified by a unique id number automatically assigned by the
	system.</li>
	<li><p>An <em>Attribute</em> is a characteristic of
	malware that can be used as a descriptor. Attributes are categorised
	and always linked to an Event via the Event id.</p>
</ul>
<p>Note that it may happen that different events are
related to a same malware or variants as the data may be imported by
different groups. The application creates automatically links between
events with same attributes.</p>

<h3>Sharing malware/attack information steps by steps</h3>
<img src="/img/doc/add-event.png" style="float:right;" />
<p>Mandatory fields are marked with *</p>
<ol>
	<li>Click on <em>New Event</em> (left menu)</li>
	<li>Fill-in the form:
    	<ul>
    	<li><em>Date*:</em> date of the malware was discovered</li>
	<li><em>Private*:</em> is the event sharable with other servers. <small>(only in sync-mode)</small></li>
     	<li><em>Risk*:</em> estimated risk level related to the malware.<br/>
	        Guideline for risk level:
		    <ul>
    			<li>Undefined (default)</li>
    			<li>Low - TBD</li>
    			<li>Med - Advanced Persistent Threat</li>
    			<li>High - Very sophisticated APT (e.g. including 0-day)</li>
		    </ul>
		</li>
       <li><em>Info*:</em> High level information that can help to understand the malware/attack,
            like title and high level behavior.<br/>
            This field should remain as short as possible (recommended max 50 words).
            The full description of the malware behavior and its artifacts must
            be defined as an attribute (other).</li>
        </ul>
    </li>
    <li style="clear:both;">Click <em>Submit</em>
    	<img src="/img/doc/add-event-done.png" style="float:right;" />
    	<p>Note that at this stage, the information is
    	shared on the site but no notification is sent to the other parties
    	yet.</p></li>
    <li>Click <em>Add Attribute</em> or <em>Add Attachment</em>
	</li>
	<li style="clear:both;">For Attribute:
    	<img src="/img/doc/add-attribute.png" style="float:right;" />
    	<ul>
        	<li><em>Category*</em>: see Category section below</li>
        	<li><em>Type*:</em> see Type section below</li>
        	<li><em>Private*:</em> prevent upload of this specific Attribute to other servers. <small>(only in sync-mode)</small></li>
        	<li><em>IDS Signature?</em>: Check this box if you want
        	the attribute to be part of the IDS signature generated by the site.
        	Make sure that the information in value is usable in an IDS
        	signature, do not check if it is free text, Vulnerability.</li>
        	<li><em>Value:</em> enter the attribute value. Note
        	that the value format will be validated for some types like hash and
        	IP addresses.</li>
        	<li><em>Batch Import:</em> check this box to import
        	data in batch. Enter an attribute value per line, each entry will be
        	assigned the selected Category and Type.</li>
        	<li>Click <em>Submit</em></li>
        </ul>
    </li>

    <li style="clear:both;">For Attachment:
        <img src="/img/doc/add-attachment.png" style="float:right;" />
        <ul>
        	<li><em>Category:</em> see Category section below</li>
        	<li>Select the file to upload</li>
        	<li><em>Malware:</em> Check this box if the file to upload is
        	harmful. The system will then encrypt with zip before storing the
        	file with the default password, <em>"infected"</em>. This will protect
        	other systems against accidental infection.<br/>
        	Note that a hash will be automatically computed
        	and added to the event as an attribute.</li>
        	<li>Click <em>Upload</em></li>
        </ul>
    <li>Redo steps 5-6 as many time as attributes you need to upload.</li>
    <li>Click <em>Publish Event</em> once all attributes are uploaded.<br/>
        <p>The application will then send the event with all uploaded information
        to all users of the site.<br/>
        In sync-mode the event will also be uploaded to other servers users have configured in their profile.</p>
        <p>You can modify, delete or add new attributes after publishing. In that case, any
        change will be accessible by other users via the GUI and only
        released by email to all users once you re-Publish the event.</p>
</li>
</ol>


<?php
// Load the Attribute model to extract the documentation from the defintions
App::import('Model', 'Attribute');
$attr = new Attribute();
?>

<h2>Attribute Categories and Types</h2>
<h3>Attribute Categories vs Types</h3>
<table>
<tr>
    <th>Category</th>
    <?php foreach ($attr->category_definitions as $cat => $cat_def ): ?>
    <th style="width:5%; text-align:center; white-space:normal"><?php echo $cat; ?></th>
    <?php endforeach;?>
</tr>
<?php foreach ($attr->type_definitions as $type => $def): ?>
<tr>
    <td><?php echo $type; ?></td>
    <?php foreach ($attr->category_definitions as $cat => $cat_def ): ?>
    <td style="text-align:center"><?php echo in_array($type, $cat_def['types'])? 'X' : ''; ?></td>
    <?php endforeach;?>
<?php endforeach;?>
</tr>
<tr>
    <th>Category</th>
    <?php foreach ($attr->category_definitions as $cat => $cat_def ): ?>
    <th style="width:5%; text-align:center; white-space:normal"><?php echo $cat; ?></th>
    <?php endforeach;?>
</tr>
</table>
<h3>Categories</h3>
<table>
<tr>
    <th>Category</th>
    <th>Description</th>
</tr>
<?php foreach ($attr->category_definitions as $cat => $def): ?>
<tr>
    <td><?php echo $cat; ?></td>
    <td><?php echo isset($def['formdesc'])? $def['formdesc'] : $def['desc']; ?></td>
<?php endforeach;?>
</tr>
</table>

<h3>Types</h3>
<table>
<tr>
    <th>Type</th>
    <th>Description</th>
</tr>
<?php foreach ($attr->type_definitions as $type => $def): ?>
<tr>
    <td><?php echo $type; ?></td>
    <td><?php echo isset($def['formdesc'])? $def['formdesc'] : $def['desc']; ?></td>
<?php endforeach;?>
</tr>
</table>


<hr/>
<h2>Export and Import</h2>
<p>The platform has full support for automated data export and import.</p>
<h3>IDS and script export</h3>
<p>First of all you can export data in formats that are suitable for NIDS or scripts (text, xml,...).<br/>
All details about this export can be found on the <?php echo $this->Html->link(__('Export', true), array('controller' => 'events', 'action' => 'export')); ?> page.
</p>
<h3>REST API</h3>
<p>The platform is also <a href="http://en.wikipedia.org/wiki/Representational_state_transfer">RESTfull</a>, so this means you can use structured format (XML) to access Events data.</p>
<h4>Requests</h4>
<p>Use any HTTP compliant library to perform requests. However to make clear you are doing a REST request you need to either specify the <code>Accept</code> type to <code>application/xml</code>, or append <code>.xml</code> to the url.</p>
<p>The following table shows the relation of the request type and the resulting action:</p>
<table style="width:250px;">
<colgroup>
<col width="18%">
<col width="34%">
<col width="48%">
</colgroup>
<thead valign="bottom">
<tr><th class="head">HTTP format</th>
<th class="head">URL</th>
<th class="head">Controller action invoked</th>
</tr>
</thead>
<tbody valign="top">
<tr><td>GET</td>
<td>/events</td>
<td>EventsController::index() <sup>(1)</sup></td>
</tr>
<tr><td>GET</td>
<td>/events/123</td>
<td>EventsController::view(123) <sup>(2)</sup></td>
</tr>
<tr><td>POST</td>
<td>/events</td>
<td>EventsController::add()</td>
</tr>
<tr><td>PUT</td>
<td>/events/123</td>
<td>EventsController::edit(123)</td>
</tr>
<tr><td>DELETE</td>
<td>/events/123</td>
<td>EventsController::delete(123)</td>
</tr>
<tr><td>POST</td>
<td>/events/123</td>
<td>EventsController::edit(123)</td>
</tr>
</tbody>
</table>
<small>(1) Warning, there's a limit on the number of results when you call <code>index</code>.</small><br/>
<small>(2) Attachments are included using base64 encoding below the <code>data</code> tag.</small><br/>
<br/>

<h4>Authentication</h4>
<p>REST being stateless you need to authenticate your request by using your <?php echo $this->Html->link(__('authkey/apikey', true), array('controller' => 'users', 'action' => 'view', 'me')); ?>. Simply set the <code>Authorization</code> HTTP header.</p>
<h4>Example - Get single Event</h4>
<p>In this example we fetch the details of a single Event (and thus also his Attributes).<br/>
The request should be:</p>
<pre>GET <?php echo Configure::read('CyDefSIG.baseurl');?>/events/123</pre>
<p>And with the HTTP Headers:</p>
<pre>Accept: application/xml
Authorization: XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</pre>
<p>The response you're going to get is the following data:</p>
<pre>&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot; standalone=&quot;no&quot;?&gt;
&lt;response&gt;
    &lt;Event&gt;
        &lt;id&gt;123&lt;/id&gt;
        &lt;date&gt;2012-04-06&lt;/date&gt;
        &lt;risk&gt;Undefined&lt;/risk&gt;
        &lt;info&gt;TEST&lt;/info&gt;
        &lt;published&gt;0&lt;/published&gt;
        &lt;uuid&gt;4f7eff11-4e98-47b7-ae96-6a7fff32448e&lt;/uuid&gt;
        &lt;private&gt;0&lt;/private&gt;
        &lt;Attribute&gt;
            &lt;id&gt;9577&lt;/id&gt;
            &lt;event_id&gt;123&lt;/event_id&gt;
            &lt;category&gt;Artifacts dropped&lt;/category&gt;
            &lt;type&gt;other&lt;/type&gt;
            &lt;value&gt;test other&lt;/value&gt;
            &lt;to_ids&gt;1&lt;/to_ids&gt;
            &lt;uuid&gt;4f7fe870-e5a4-4b9e-a89c-a45bff32448e&lt;/uuid&gt;
            &lt;revision&gt;1&lt;/revision&gt;
            &lt;private&gt;0&lt;/private&gt;
        &lt;/Attribute&gt;
        &lt;Attribute&gt;
            &lt;id&gt;9576&lt;/id&gt;
            &lt;event_id&gt;123&lt;/event_id&gt;
            &lt;category&gt;Payload delivery&lt;/category&gt;
            &lt;type&gt;filename&lt;/type&gt;
            &lt;value&gt;test attribute&lt;/value&gt;
            &lt;to_ids&gt;1&lt;/to_ids&gt;
            &lt;uuid&gt;4f7fe85b-0f78-4e40-91f3-a45aff32448e&lt;/uuid&gt;
            &lt;revision&gt;1&lt;/revision&gt;
            &lt;private&gt;0&lt;/private&gt;
        &lt;/Attribute&gt;
    &lt;/Event&gt;
&lt;/response&gt;</pre>


<h4>Example - Add new Event</h4>
<p>In this example we want to add a single Event.<br/>
The request should be:</p>
<pre>POST <?php echo Configure::read('CyDefSIG.baseurl');?>/events
Accept: application/xml
Authorization: XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</pre>
<p>And the request body:</p>
<pre>&lt;Event&gt;
    &lt;date&gt;2012-05-06&lt;/date&gt;
    &lt;risk&gt;Undefined&lt;/risk&gt;
    &lt;info&gt;TEST REST&lt;/info&gt;
    &lt;published&gt;0&lt;/published&gt;
    &lt;private&gt;0&lt;/private&gt;
    &lt;attribute/&gt;
&lt;/Event&gt;</pre>
<!-- <p>The response you're going to get is the following data:</p>
<h2>FIXME </h2> -->



<!-- <h4>Example - Requesting an invalid page</h4>
<h2>FIXME </h2> -->



</div>

<div class="actions">
	<ul>
        <?php echo $this->element('actions_menu'); ?>
	</ul>
</div>

<script type="text/javascript" src="/js/jquery-toc.js">
</script>
