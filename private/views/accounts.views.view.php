<html><head>
        <title>Arca Payments Company Limited</title>
        <script type="text/javascript" src="client/espo.min.js?r=1643538988" data-base-path=""></script>
        <link href="client/css/espo/hazyblue-vertical.css?r=1643538988" rel="stylesheet" id="main-stylesheet">
        <link rel="preload" href="client/fonts/open-sans/open-sans-v16-cyrillic_latin_cyrillic-ext_latin-ext-regular.woff2" as="font" crossorigin="">
        <link rel="preload" href="client/fonts/open-sans/open-sans-v16-cyrillic_latin_cyrillic-ext_latin-ext-600.woff2" as="font" crossorigin="">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
        <meta content="utf-8" http-equiv="encoding">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="EspoCRM - Open Source CRM application.">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="shortcut icon" sizes="196x196" href="client/img/favicon196x196.png">
        <link rel="icon" href="client/img/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="client/img/favicon.ico" type="image/x-icon">
        <script type="text/javascript">
            window.addEventListener('DOMContentLoaded', () => {
                Espo.loader.setCacheTimestamp(1643538988);
                Espo.loader.setBasePath('');
                Espo.loader.setInternalModuleList(["advanced","crm","espocloud","google","outlook","sales","system-message"]);

                require('app', App => {
                    new App({
                        id: 'espocrm-application-id',
                        useCache: true,
                        cacheTimestamp: 1643538988,
                        basePath: '',
                        apiUrl: 'api/v1',
                        ajaxTimeout: 60000,
                        internalModuleList: ["advanced","crm","espocloud","google","outlook","sales","system-message"],
                    }, app => {
                        app.start();
                    });
                });
            });
        </script>
    </head>
    <body data-new-gr-c-s-check-loaded="14.1054.0" data-gr-ext-installed="" class="minimized" style="min-height: 552px;" data-new-gr-c-s-loaded="14.1054.0"><header id="header"><div id="navbar"><div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-action="toggleCollapsable">
            <span class="fas fa-bars"></span>
        </button>
        <div class="navbar-logo-container"><a class="navbar-brand nav-link" href="#"><img src="?entryPoint=LogoImage&amp;id=617024270a504eb19" class="logo"></a></div>
        <a href="javascript:" class="side-menu-button"><span class="fas fa-bars"></span></a>
    </div>

    <div class="navbar-collapse navbar-body">
        <ul class="nav navbar-nav tabs" style="height: auto;">
            <li data-name="Home" class="not-in-more tab">
                <a href="#" class="nav-link">
                    <span class="short-label" title="Home">
                        <span class="fas fa-th-large"></span>
                    </span>
                    <span class="full-label">Home</span>
                    

                </a>
            </li>
            <li data-name="Account" class="not-in-more tab active">
                <a href="#Account" class="nav-link" style="border-color: #edc755">
                    <span class="short-label" title="Accounts" style="color: #edc755">
                        <span class="fas fa-building"></span>
                    </span>
                    <span class="full-label">Accounts</span>
                    

                </a>
            </li>
            <li data-name="Contact" class="not-in-more tab">
                <a href="#Contact" class="nav-link" style="border-color: #a4c5e0">
                    <span class="short-label" title="Contacts" style="color: #a4c5e0">
                        <span class="fas fa-id-badge"></span>
                    </span>
                    <span class="full-label">Contacts</span>
                    

                </a>
            </li>
            <li data-name="Lead" class="not-in-more tab">
                <a href="#Lead" class="nav-link" style="border-color: #d6a2c9">
                    <span class="short-label" title="Leads" style="color: #d6a2c9">
                        <span class="fas fa-address-card"></span>
                    </span>
                    <span class="full-label">Leads</span>
                    

                </a>
            </li>
            <li data-name="Opportunity" class="not-in-more tab">
                <a href="#Opportunity" class="nav-link" style="border-color: #9fc77e">
                    <span class="short-label" title="Opportunities" style="color: #9fc77e">
                        <span class="fas fa-dollar-sign"></span>
                    </span>
                    <span class="full-label">Opportunities</span>
                    

                </a>
            </li>
            <li data-name="Case" class="not-in-more tab">
                <a href="#Case" class="nav-link">
                    <span class="short-label" title="Cases">
                        <span class="fas fa-briefcase"></span>
                    </span>
                    <span class="full-label">Cases</span>
                    

                </a>
            </li>
            <li data-name="Email" class="not-in-more tab">
                <a href="#Email" class="nav-link">
                    <span class="short-label" title="Emails">
                        <span class="fas fa-envelope"></span>
                    </span>
                    <span class="full-label">Emails</span>
                    

                </a>
            </li>
            <li data-name="Calendar" class="not-in-more tab">
                <a href="#Calendar" class="nav-link">
                    <span class="short-label" title="Calendar">
                        <span class="far fa-calendar-alt"></span>
                    </span>
                    <span class="full-label">Calendar</span>
                    

                </a>
            </li>
            <li data-name="Meeting" class="not-in-more tab">
                <a href="#Meeting" class="nav-link">
                    <span class="short-label" title="Meetings">
                        <span class="fas fa-calendar-check"></span>
                    </span>
                    <span class="full-label">Meetings</span>
                    

                </a>
            </li>
            <li data-name="Call" class="not-in-more tab">
                <a href="#Call" class="nav-link">
                    <span class="short-label" title="Calls">
                        <span class="fas fa-phone"></span>
                    </span>
                    <span class="full-label">Calls</span>
                    

                </a>
            </li>
            <li data-name="Task" class="not-in-more tab">
                <a href="#Task" class="nav-link">
                    <span class="short-label" title="Tasks">
                        <span class="fas fa-tasks"></span>
                    </span>
                    <span class="full-label">Tasks</span>
                    

                </a>
            </li>
            <li class="dropdown more">
                <a id="nav-more-tabs-dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"><span class="fas fa-ellipsis-h more-icon"></span></a>
                <ul class="dropdown-menu more-dropdown-menu" role="menu" aria-labelledby="nav-more-tabs-dropdown" style="">
                    <li data-name="Document" class="in-more tab">
                        <a href="#Document" class="nav-link">
                            <span class="short-label">
                                <span class="far fa-file-alt"></span>
                            </span>
                            <span class="full-label">Documents</span>
                            

                        </a>
                    </li>
                    <li data-name="Campaign" class="in-more tab">
                        <a href="#Campaign" class="nav-link">
                            <span class="short-label">
                                <span class="fas fa-chart-line"></span>
                            </span>
                            <span class="full-label">Campaigns</span>
                            

                        </a>
                    </li>
                    <li data-name="KnowledgeBaseArticle" class="in-more tab">
                        <a href="#KnowledgeBaseArticle" class="nav-link">
                            <span class="short-label">
                                <span class="fas fa-book"></span>
                            </span>
                            <span class="full-label">Knowledge Base</span>
                            

                        </a>
                    </li>
                    <li data-name="Stream" class="in-more tab">
                        <a href="#Stream" class="nav-link">
                            <span class="short-label">
                                <span class="fas fa-rss"></span>
                            </span>
                            <span class="full-label">Stream</span>
                            

                        </a>
                    </li>
                    <li data-name="User" class="in-more tab">
                        <a href="#User" class="nav-link">
                            <span class="short-label">
                                <span class="fas fa-user-circle"></span>
                            </span>
                            <span class="full-label">Users</span>
                            

                        </a>
                    </li>
                    <li data-name="Report" class="in-more tab">
                        <a href="#Report" class="nav-link">
                            <span class="short-label">
                                <span class="fas fa-chart-bar"></span>
                            </span>
                            <span class="full-label">Reports</span>
                            

                        </a>
                    </li>
                    <li data-name="Quote" class="in-more tab">
                        <a href="#Quote" class="nav-link">
                            <span class="short-label">
                                <span class="fas fa-file-invoice-dollar"></span>
                            </span>
                            <span class="full-label">Quotes</span>
                            

                        </a>
                    </li>
                    <li data-name="SalesOrder" class="in-more tab">
                        <a href="#SalesOrder" class="nav-link">
                            <span class="short-label">
                                <span class="fas fa-file-invoice"></span>
                            </span>
                            <span class="full-label">Sales Orders</span>
                            

                        </a>
                    </li>
                    <li data-name="Invoice" class="in-more tab">
                        <a href="#Invoice" class="nav-link">
                            <span class="short-label">
                                <span class="fas fa-receipt"></span>
                            </span>
                            <span class="full-label">Invoices</span>
                            

                        </a>
                    </li>
                    <li data-name="Product" class="in-more tab">
                        <a href="#Product" class="nav-link">
                            <span class="short-label">
                                <span class="fas fa-cube"></span>
                            </span>
                            <span class="full-label">Products</span>
                            

                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <div class="navbar-right-container">
        <ul class="nav navbar-nav navbar-right">
            <li class="nav navbar-nav navbar-form global-search-container">
                <div class="input-group has-feedback">
    <input type="text" class="form-control global-search-input" placeholder="Search" autocomplete="espo-global-search">
    <div class="input-group-btn">
        <a class="btn btn-link global-search-button" data-action="search" title="Search"><span class="fas fa-search"></span></a>
    </div>
</div>
<div class="global-search-panel-container"></div>

            </li>
            
            <li class="dropdown hidden-xs quick-create-container">
                <a id="nav-quick-create-dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#" title="Create"><i class="fas fa-plus"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="nav-quick-create-dropdown">
                    <li class="dropdown-header">Create</li>
                    <li><a href="#Account/create" data-name="Account" data-action="quick-create">Account</a></li>
                    <li><a href="#Contact/create" data-name="Contact" data-action="quick-create">Contact</a></li>
                    <li><a href="#Lead/create" data-name="Lead" data-action="quick-create">Lead</a></li>
                    <li><a href="#Opportunity/create" data-name="Opportunity" data-action="quick-create">Opportunity</a></li>
                    <li><a href="#Meeting/create" data-name="Meeting" data-action="quick-create">Meeting</a></li>
                    <li><a href="#Call/create" data-name="Call" data-action="quick-create">Call</a></li>
                    <li><a href="#Task/create" data-name="Task" data-action="quick-create">Task</a></li>
                    <li><a href="#Case/create" data-name="Case" data-action="quick-create">Case</a></li>
                    <li><a href="#Email/create" data-name="Email" data-action="quick-create">Email</a></li>
                </ul>
            </li><li class="dropdown notifications-badge-container">
                <a href="javascript:" class="notifications-button" data-action="showNotifications" title="Notifications">
    <span class="fas fa-bell icon bell"></span>
    <span class="badge number-badge hidden"></span>
</a>
<div class="notifications-panel-container"></div>

            </li>
            <li class="dropdown menu-container">
                <a id="nav-menu-dropdown" class="dropdown-toggle" data-toggle="dropdown" href="#" title="Menu"><span class="fas fa-ellipsis-v"></span></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="nav-menu-dropdown">
                            <li><a href="#User/view/617018eab33398ebc" class="nav-link"><img class="avatar avatar-link" width="16" src="?entryPoint=avatar&amp;size=small&amp;id=617018eab33398ebc&amp;t=1644414744552"> Flora Iluokhauno</a></li>
                            <li class="divider"></li>
                            <li><a href="#Preferences" class="nav-link">Preferences</a></li>
                            <li class="divider"></li>
                            <li><a href="#LastViewed" class="nav-link action" data-action="showLastViewed">Last Viewed</a></li>
                            <li class="divider"></li>
                            <li><a href="#About" class="nav-link">About</a></li>
                            <li><a href="javascript:" class="nav-link action" data-action="logout">Log Out</a></li>
                </ul>
            </li>
        </ul>
        </div>
        <a class="minimizer" href="javascript:">
            <span class="fas fa-chevron-right right"></span>
            <span class="fas fa-chevron-left left"></span>
        </a>
    </div>
</div>
</div>
</header>
<div id="content" class="container content" style="min-height: 997.781px;">
    <div id="main"><div class="header page-header"><div class="page-header-row">
    <div class=" no-break-words page-header-column-1">
        <h3 class="header-title"><div class="header-breadcrumbs"><div class="breadcrumb-item"><span class="color-icon fas fa-square-full" style="color: rgb(237, 199, 85);"></span>&nbsp;<a href="#Account" class="action" data-action="navigateToRoot">Accounts</a></div><div class="breadcrumb-separator"><span class="chevron-right"></span></div><div class="breadcrumb-item"><span class="font-size-flexible title">Arca Payments Company Limited</span></div></div></h3>
    </div>
    <div class="page-header-column-2">
        <div class="header-buttons btn-group pull-right">
                <a href="javascript:" class="btn btn-default btn-xs-wide action" data-name="follow" data-action="follow">
                
                <span class="fas fa-rss fa-sm"></span> Follow
                </a>


                <div class="btn-group dropdown-group hidden" role="group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="fas fa-ellipsis-h"></span>
                </button>
                <ul class="dropdown-menu pull-right">
                        <li class="hidden">
                            <a href="javascript:" class="action" data-name="startProcessGlobal" data-action="startProcessGlobal" data-handler="advanced:start-process-action-handler">
                            
                            Start Process</a></li>
                </ul>
                </div>
        </div>
    </div>
</div>
</div>
<div class="record"><div class="detail" id="account-detail-4321" data-scope="Account">
    <div class="detail-button-container button-container record-buttons clearfix stick-sub" style="display: none;">
        <div class="btn-group actions-btn-group" role="group">
                <button class="btn btn-default action btn-xs-wide" data-action="edit" type="button">Edit</button>
            <button type="button" class="btn btn-default dropdown-toggle dropdown-item-list-button" data-toggle="dropdown"><span class="fas fa-ellipsis-h"></span></button>
            <ul class="dropdown-menu pull-left">
                <li class="hidden"><a href="javascript:" class="action" data-action="delete">Remove</a></li>
                <li class=""><a href="javascript:" class="action" data-action="duplicate">Duplicate</a></li>
                <li class=""><a href="javascript:" class="action" data-action="viewPersonalData">View Personal Data</a></li>
                <li class=""><a href="javascript:" class="action" data-action="viewFollowers">View Followers</a></li>
            </ul>
        </div>
        <div class="pull-right">
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-text btn-icon action  disabled" data-action="previous" title="Previous Entry">
                    <span class="fas fa-chevron-left"></span>
                </button>
                <button type="button" class="btn btn-text btn-icon action " data-action="next" title="Next Entry">
                    <span class="fas fa-chevron-right"></span>
                </button>
            </div>
        </div>
    </div><div style="height: 21px;">&nbsp;</div>
    <div class="detail-button-container button-container edit-buttons clearfix hidden stick-sub" style="display: none;">
        <div class="btn-group actions-btn-group" role="group">
        <button class="btn btn-primary action btn-xs-wide" data-action="save" type="button">Save</button>
        <button class="btn btn-default action btn-xs-wide" data-action="cancelEdit" type="button">Cancel</button>
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="fas fa-ellipsis-h"></span></button>
        <ul class="dropdown-menu pull-left">
            <li class="">
                <a href="javascript:" class="action" data-action="saveAndContinueEditing">Save &amp; Continue Editing</a>
            </li>
        </ul>
        </div>
    </div><div style="height: 21px;">&nbsp;</div>

    <div class="record-grid">
        <div class="left">
            <div class="middle">


    
    <div class="panel panel-default" data-style="default">
        
        <div class="panel-heading"><h4 class="panel-title">Overview</h4></div>
        
        <div class="panel-body panel-body-form">

        
        

        
            <div class="row">
            
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="name"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="name"><span class="label-text">Name</span><span class="required-sign" style="display: none;"> *</span></label>
                        <div class="field" data-name="name">Arca Payments Company Limited</div>
                    </div>
                
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="website"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="website"><span class="label-text">Website</span></label>
                        <div class="field" data-name="website">	<a href="https://www.arcapg.com/www.arca.network" target="_blank">www.arcapg.com/www.arca.network</a>
</div>
                    </div>
                
            
            </div>
        
            <div class="row">
            
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="emailAddress"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="emailAddress"><span class="label-text">Email</span></label>
                        <div class="field" data-name="emailAddress">        <div>
            <a href="javascript:" data-email-address="info@arca.network" data-action="mailTo">
            <span>info@arca.network</span>
            </a>
        </div>
</div>
                    </div>
                
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="phoneNumber"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="phoneNumber"><span class="label-text">Phone</span></label>
                        <div class="field" data-name="phoneNumber">        <div>
            <a href="tel:+2347002722729" data-phone-number="+2347002722729" data-action="dial">
            <span>+2347002722729</span>
            </a>
            <span class="text-muted small">(Office)</span>
        </div>
</div>
                    </div>
                
            
            </div>
        
            <div class="row">
            
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="billingAddress"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="billingAddress"><span class="label-text">Billing Address</span></label>
                        <div class="field" data-name="billingAddress">8A, Bendel close, Victoria Island, Lagos Nigeria<br>Victoria Island, Lagos<br>Nigeria</div>
                    </div>
                
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="shippingAddress"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="shippingAddress"><span class="label-text">Shipping Address</span></label>
                        <div class="field" data-name="shippingAddress">8A, Bendel close, Victoria Island, Lagos Nigeria<br>Victoria Island, Lagos<br>Nigeria</div>
                    </div>
                
            
            </div>
        

        
        
        
        </div>
    </div>

    
    <div class="panel panel-default" data-style="default">
        
        <div class="panel-heading"><h4 class="panel-title">Details</h4></div>
        
        <div class="panel-body panel-body-form">

        
        

        
            <div class="row">
            
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="type"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="type"><span class="label-text">Type</span></label>
                        <div class="field" data-name="type">
<span class="text-default">Customer</span>
</div>
                    </div>
                
            

                
                
                    
                    <div class="cell col-sm-6 form-group" data-name="industry"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="industry"><span class="label-text">Industry</span></label>
                        <div class="field" data-name="industry">
<span class="text-default">Finance</span>
</div>
                    </div>
                
            
            </div>
        
            <div class="row">
            
            

                
                
                    
                    <div class="cell col-sm-12 form-group" data-name="description"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
                        <label class="control-label" data-name="description"><span class="label-text">Description</span></label>
                        <div class="field" data-name="description">None</div>
                    </div>
                
            
            </div>
        

        
        
        
        </div>
    </div>



</div>
            <div class="extra"></div>
            <div class="bottom">    <div class="panel panel-default panel-stream sticked" data-name="stream" data-style="">
        <div class="panel-heading">
            <div class="pull-right btn-group panel-actions-container">
<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="fas fa-ellipsis-h"></span></button>
<ul class="dropdown-menu">
    <li><a href="javascript:" class="action" data-panel="stream" data-action="viewPostList">View List · Posts</a></li>
    <li class="divider"></li>
    <li><a href="javascript:" class="action" data-panel="stream" data-action="selectFilter" data-name="all"><span class="check-icon fas fa-check pull-right"></span><div>All</div></a></li>
    <li><a href="javascript:" class="action" data-panel="stream" data-action="selectFilter" data-name="posts"><span class="check-icon fas fa-check pull-right hidden"></span><div>Posts</div></a></li>
    <li><a href="javascript:" class="action" data-panel="stream" data-action="selectFilter" data-name="updates"><span class="check-icon fas fa-check pull-right hidden"></span><div>Updates</div></a></li>
</ul>
</div>

            <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="stream">
                Stream
            </span>
            </h4>
        </div>

        <div class="panel-body" data-name="stream">
            <div class="form-group post-container">
    <div class="textarea-container">
<textarea class="main-element form-control auto-height" data-name="post" rows="1" autocomplete="espo-post" placeholder="Write your comment here"></textarea>
</div>
    <div class="buttons-panel margin hide floated-row clearfix">
        <div>
            <button class="btn btn-primary post">Post</button>

        </div>
        <div class="attachments-container"><div class="attachment-upload">
    <div class="clearfix attachment-control">
        <div class="pull-left">
            <label class="attach-file-label" title="Attach File">
                <span class="btn btn-default btn-icon"><span class="fas fa-paperclip"></span></span>
                <input type="file" class="file pull-right" multiple="">
            </label>
        </div>

    </div>
    <div class="attachments"></div>
</div>
</div>
        <a href="javascript:" class="text-muted pull-right stream-post-info" data-original-title="" title="">
            <span class="fas fa-info-circle"></span>
        </a>
        <a href="javascript:" class="text-muted pull-right stream-post-preview hidden action" title="Preview" data-action="preview">
            <span class="fas fa-eye"></span>
        </a>
    </div>
</div>

<div class="list-container">
<div class="list list-expanded">
    <ul class="list-group">
        <li data-id="622ee440c5302797b" class="list-group-item list-row">
        

    <div class="pull-right right-container cell-buttons">
    
    </div>

    <div class="stream-head-container">
        <div class="pull-left">
            <img class="avatar" width="20" src="?entryPoint=avatar&amp;size=small&amp;id=616ff0c86e599831a&amp;t=1644414744552">
        </div>
        <div class="stream-head-text-container">
            
            <span class="text-muted message"><a href="#User/view/616ff0c86e599831a">Udedike Ibeh</a> created this account self-assigned</span>
        </div>
    </div>

    <div class="stream-date-container">
        <span class="text-muted small"><span title="Mar 14 06:44 am">Mar 14</span></span>
    </div>


        </li>
    </ul>

    <div class="show-more hide">
        <a type="button" href="javascript:" class="btn btn-default btn-block" data-action="showMore" title="Total: 1">
            <div class="pull-right text-muted more-count">0</div>
            <span>Show more</span>
        </a>
    </div>
</div>


</div>

        </div>
    </div>
    <div class="panel panel-default panel-contacts" data-name="contacts" data-style="">
        <div class="panel-heading">
            <div class="pull-right btn-group panel-actions-container"><button type="button" class="btn btn-default btn-sm action" data-action="createRelated" data-panel="contacts" data-link="contacts" title="Create"><span class="fas fa-plus"></span></button>

<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="fas fa-ellipsis-h"></span></button>
<ul class="dropdown-menu">
    <li><a href="javascript:" class="action" data-panel="contacts" data-action="viewRelatedList">View List</a></li>
    <li><a href="javascript:" class="action" data-panel="contacts" data-action="selectRelated" data-link="contacts" data-mass-select="" data-create-button="true">Select</a></li>
    <li class="divider"></li>
    <li><a href="javascript:" class="action" data-panel="contacts" data-action="selectFilter" data-name="all"><span class="check-icon fas fa-check pull-right"></span><div>All</div></a></li>
    <li><a href="javascript:" class="action" data-panel="contacts" data-action="selectFilter" data-name="accountActive"><span class="check-icon fas fa-check pull-right hidden"></span><div>Active</div></a></li>
</ul>
</div>

            <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="contacts">
                <span class="color-icon fas fa-square-full" style="color: rgb(164, 197, 224);"></span>&nbsp;Contacts
            </span>
            </h4>
        </div>

        <div class="panel-body" data-name="contacts">
            <div class="list-container">    No Data
</div>

        </div>
    </div>
    <div class="panel panel-default panel-opportunities" data-name="opportunities" data-style="">
        <div class="panel-heading">
            <div class="pull-right btn-group panel-actions-container"><button type="button" class="btn btn-default btn-sm action" data-action="createRelated" data-panel="opportunities" data-link="opportunities" title="Create"><span class="fas fa-plus"></span></button>

<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="fas fa-ellipsis-h"></span></button>
<ul class="dropdown-menu">
    <li><a href="javascript:" class="action" data-panel="opportunities" data-action="viewRelatedList">View List</a></li>
    <li><a href="javascript:" class="action" data-panel="opportunities" data-action="selectRelated" data-link="opportunities" data-mass-select="" data-create-button="true">Select</a></li>
</ul>
</div>

            <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="opportunities">
                <span class="color-icon fas fa-square-full" style="color: rgb(159, 199, 126);"></span>&nbsp;Opportunities
            </span>
            </h4>
        </div>

        <div class="panel-body" data-name="opportunities">
            <div class="list-container">    No Data
</div>

        </div>
    </div>
    <div class="panel panel-default panel-cases" data-name="cases" data-style="">
        <div class="panel-heading">
            <div class="pull-right btn-group panel-actions-container"><button type="button" class="btn btn-default btn-sm action" data-action="createRelated" data-panel="cases" data-link="cases" title="Create"><span class="fas fa-plus"></span></button>

<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="fas fa-ellipsis-h"></span></button>
<ul class="dropdown-menu">
    <li><a href="javascript:" class="action" data-panel="cases" data-action="viewRelatedList">View List</a></li>
    <li><a href="javascript:" class="action" data-panel="cases" data-action="selectRelated" data-link="cases" data-mass-select="" data-create-button="true">Select</a></li>
</ul>
</div>

            <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="cases">
                Cases
            </span>
            </h4>
        </div>

        <div class="panel-body" data-name="cases">
            <div class="list-container">    No Data
</div>

        </div>
    </div>
    <div class="panel panel-default panel-documents" data-name="documents" data-style="">
        <div class="panel-heading">
            <div class="pull-right btn-group panel-actions-container"><button type="button" class="btn btn-default btn-sm action" data-action="createRelated" data-panel="documents" data-link="documents" title="Create"><span class="fas fa-plus"></span></button>

<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="fas fa-ellipsis-h"></span></button>
<ul class="dropdown-menu">
    <li><a href="javascript:" class="action" data-panel="documents" data-action="viewRelatedList">View List</a></li>
    <li><a href="javascript:" class="action" data-panel="documents" data-action="selectRelated" data-link="documents" data-mass-select="" data-create-button="true">Select</a></li>
</ul>
</div>

            <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="documents">
                Documents
            </span>
            </h4>
        </div>

        <div class="panel-body" data-name="documents">
            <div class="list-container">    No Data
</div>

        </div>
    </div>
</div>
        </div>
        <div class="side">
        <div class="panel panel-default panel-default" data-name="default" data-style="">

    <div class="panel-body panel-body-form" data-name="default">
        <div class="row">
    <div class="cell form-group col-sm-6 col-md-12" data-name="assignedUser"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
        <label class="control-label" data-name="assignedUser">
            <span class="label-text">Assigned User</span>
        </label>
        <div class="field" data-name="assignedUser"><img class="avatar avatar-link" width="14" src="?entryPoint=avatar&amp;size=small&amp;id=616ff0c86e599831a&amp;t=1644414744552">
<a href="#User/view/616ff0c86e599831a">Udedike Ibeh</a>
</div>
    </div>
    <div class="cell form-group col-sm-6 col-md-12" data-name="teams"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
        <label class="control-label" data-name="teams">
            <span class="label-text">Teams</span>
        </label>
        <div class="field" data-name="teams">    <div class="link-multiple-item"><a href="#Team/view/616bdd509a883b471">Sales</a></div>

</div>
    </div>
    <div class="cell form-group col-sm-6 col-md-12" data-name="complexCreated"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
        <label class="control-label" data-name="complexCreated">
            <span class="label-text">Created</span>
        </label>
        <div class="field" data-name="complexCreated"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
        <span data-name="createdAt" class="field">Mar 14 06:44 am</span> <span class="text-muted">»</span> <span data-name="createdBy" class="field"><a href="#User/view/616ff0c86e599831a">Udedike Ibeh</a></span>
        </div>
    </div>
    <div class="cell form-group col-sm-6 col-md-12 hidden-cell" data-name="complexModified"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
        <label class="control-label hidden" data-name="complexModified">
            <span class="label-text">Modified</span>
        </label>
        <div class="field hidden" data-name="complexModified"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
        <span data-name="modifiedAt" class="field">Mar 14 06:44 am</span> <span class="text-muted">»</span> <span data-name="modifiedBy" class="field">
    None
</span>
        </div>
    </div>
    <div class="cell form-group col-sm-6 col-md-12 hidden-cell" data-name="followers"><a href="javascript:" class="pull-right inline-edit-link hidden"><span class="fas fa-pencil-alt fa-sm"></span></a>
        <label class="control-label hidden" data-name="followers">
            <span class="label-text">Followers</span>
        </label>
        <div class="field hidden" data-name="followers">
                None


        </div>
    </div>
</div>

    </div>
</div>
<div class="panel panel-default panel-activities" data-name="activities" data-style="">
    <div class="panel-heading">
        <div class="pull-right btn-group panel-actions-container">
<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="fas fa-ellipsis-h"></span></button>
<ul class="dropdown-menu">
    <li><a href="javascript:" class="action" data-panel="activities" data-action="composeEmail">Compose Email</a></li>
    <li><a href="javascript:" class="action" data-panel="activities" data-action="createActivity" data-link="meetings">Schedule Meeting</a></li>
    <li><a href="javascript:" class="action" data-panel="activities" data-action="createActivity" data-link="calls">Schedule Call</a></li>
    <li class="divider"></li>
    <li><a href="javascript:" class="action" data-panel="activities" data-action="viewRelatedList" data-scope="Meeting">View List · Meetings</a></li>
    <li><a href="javascript:" class="action" data-panel="activities" data-action="viewRelatedList" data-scope="Call">View List · Calls</a></li>
    <li class="divider"></li>
    <li><a href="javascript:" class="action" data-panel="activities" data-action="selectFilter" data-name="all"><span class="check-icon fas fa-check pull-right"></span><div>All</div></a></li>
    <li><a href="javascript:" class="action" data-panel="activities" data-action="selectFilter" data-name="Meeting"><span class="check-icon fas fa-check pull-right hidden"></span><div>Meetings</div></a></li>
    <li><a href="javascript:" class="action" data-panel="activities" data-action="selectFilter" data-name="Call"><span class="check-icon fas fa-check pull-right hidden"></span><div>Calls</div></a></li>
</ul>
</div>

        <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="activities">
                Activities
            </span>
        </h4>
    </div>

    <div class="panel-body" data-name="activities">
        <div class="list-container">    No Data
</div>

    </div>
</div>
<div class="panel panel-default panel-history" data-name="history" data-style="">
    <div class="panel-heading">
        <div class="pull-right btn-group panel-actions-container">
<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="fas fa-ellipsis-h"></span></button>
<ul class="dropdown-menu">
    <li><a href="javascript:" class="action" data-panel="history" data-action="createActivity" data-link="meetings" data-status="Held">Log Meeting</a></li>
    <li><a href="javascript:" class="action" data-panel="history" data-action="createActivity" data-link="calls" data-status="Held">Log Call</a></li>
    <li><a href="javascript:" class="action" data-panel="history" data-action="archiveEmail">Archive Email</a></li>
    <li class="divider"></li>
    <li><a href="javascript:" class="action" data-panel="history" data-action="viewRelatedList" data-scope="Meeting">View List · Meetings</a></li>
    <li><a href="javascript:" class="action" data-panel="history" data-action="viewRelatedList" data-scope="Call">View List · Calls</a></li>
    <li><a href="javascript:" class="action" data-panel="history" data-action="viewRelatedList" data-scope="Email">View List · Emails</a></li>
    <li class="divider"></li>
    <li><a href="javascript:" class="action" data-panel="history" data-action="selectFilter" data-name="all"><span class="check-icon fas fa-check pull-right"></span><div>All</div></a></li>
    <li><a href="javascript:" class="action" data-panel="history" data-action="selectFilter" data-name="Meeting"><span class="check-icon fas fa-check pull-right hidden"></span><div>Meetings</div></a></li>
    <li><a href="javascript:" class="action" data-panel="history" data-action="selectFilter" data-name="Call"><span class="check-icon fas fa-check pull-right hidden"></span><div>Calls</div></a></li>
    <li><a href="javascript:" class="action" data-panel="history" data-action="selectFilter" data-name="Email"><span class="check-icon fas fa-check pull-right hidden"></span><div>Emails</div></a></li>
</ul>
</div>

        <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="history">
                History
            </span>
        </h4>
    </div>

    <div class="panel-body" data-name="history">
        <div class="list-container">    No Data
</div>

    </div>
</div>
<div class="panel panel-default panel-tasks" data-name="tasks" data-style="">
    <div class="panel-heading">
        <div class="pull-right btn-group panel-actions-container"><button type="button" class="btn btn-default btn-sm action" data-action="createTask" data-panel="tasks" title="Create Task"><span class="fas fa-plus"></span></button>

<button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="fas fa-ellipsis-h"></span></button>
<ul class="dropdown-menu">
    <li><a href="javascript:" class="action" data-panel="tasks" data-action="viewRelatedList">View List</a></li>
    <li class="divider"></li>
    <li><a href="javascript:" class="action" data-panel="tasks" data-action="selectFilter" data-name="all"><span class="check-icon fas fa-check pull-right"></span><div>All</div></a></li>
    <li><a href="javascript:" class="action" data-panel="tasks" data-action="selectFilter" data-name="actual"><span class="check-icon fas fa-check pull-right hidden"></span><div>Actual</div></a></li>
    <li><a href="javascript:" class="action" data-panel="tasks" data-action="selectFilter" data-name="completed"><span class="check-icon fas fa-check pull-right hidden"></span><div>Completed</div></a></li>
</ul>
</div>

        <h4 class="panel-title">
            <span style="cursor: pointer;" class="action" title="Click to refresh" data-action="refresh" data-panel="tasks">
                Tasks
            </span>
        </h4>
    </div>

    <div class="panel-body" data-name="tasks">
        <div class="list-container">    No Data
</div>

    </div>
</div>

        </div>
    </div>
</div>
</div>
<div class="bottom"></div>
</div>
</div>
<footer id="footer"><p class="credit small">© 2021
<a href="https://www.espocrm.com" title="Powered by EspoCRM" rel="noopener" target="_blank">EspoCRM</a></p>
</footer>
<div id="popup-notifications-container" class="hidden"></div></body></html>