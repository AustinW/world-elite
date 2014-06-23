# Google Analytics integration plugin

This plugin adds Google Analytics tracking and reporting features to the [OctoberCMS](http://octobercms.com).

## Configuring

Google Analytics API uses the OAuth security. In order to use the plugin you need create a Google API application.

1. Go to the [Google API Console](https://cloud.google.com/console/project) and create a new project.
2. On the project page go to the **APIs & auth / APIs** section and enable Analytics API.
3. Go to the **APIs & auth / Credentials** section on the project page and click the Create New Client ID button. In the popup window select the **Service account** option. The private key will be downloaded to your computer automatically.
4. Copy the email address (xxxx@developer.gserviceaccount.com) from the OAuth / **Service Account** section and add it to your Google Analytics property you want to be able to access from OctoberCMS.
5. In the OctoberCMS back-end go to the System / Settings page and click the Google Analytics link.
6. Enter the Google API Project name, Google API Client ID, the generated email address and add the downloaded private key to the Google Analytics settings form.
7. Specify the Tracking ID and Domain name values if you are going to use the plugin's built-in tracking code.

## Adding the tracking code

Using the tracking code provided by the plugin is optional - the reporting part does not depend on whether you track your traffic with the built-in tracker or with a custom code generated by Google Analytics tools. 

To add the plugin's tracking code to your weisbte just drop the Google Analytics Tracker component to your CMS layout and add this code to the layout code after the page tag:

```php
{% page %}
{% component 'googleTracker' %}
```