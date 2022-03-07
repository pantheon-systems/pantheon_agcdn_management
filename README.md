# Pantheon AGCDN Management

[![Actively Maintained](https://img.shields.io/badge/Pantheon-Actively_Maintained-yellow?logo=pantheon&color=FFDC28)](https://pantheon.io/docs/oss-support-levels#actively-maintained)

Enables self service management of specific AGCDN settings.

The UI provides a way to do the following tasks:

* Full Purge of AGCDN - This is for all domains and URLs attached to the site. Applicable for customers with Image Optimization

* Search and Edit Dictionaries - With varying purpose and function, we create Dictionaries that lets customer maintain these keys and values. Usual use cases are Redirects, Geo-blocklist and so on

* Search and Edit ACL Lists - ACL or Access Control Lists are lists of IP Addresses usually meant for Allowlist or Blocklist features.

## How to Use

### Installation

* Install the Module on your site
  * Installing only pantheon_agcdn_management will enable all functionality.
  * Installing pantheon_agcdn_management_settings will enable only cache purging and management of the settings dictionary (intended for customers who are 'pinning' specific static build assets).
* Add the Client Key provided by Pantheon Professional Services and Save
  * Go to Configuration > AGCDN Management
* Once the Client Key is detected and accepted, the rest of the UI unlocks
  * Confirm the the Sections have been populated or does not show an error message

### Usage
* Select the proper dictionary or ACL name and click Edit
* Proceed to Add, Edit or Delete the entries
  * Note: Make sure to follow the relevant configuration and documentation on how these work
