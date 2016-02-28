-- SUMMARY --

* This module allows Slack teams to send commands to Drupal via an Outgoing
Webhooks integration. It POSTs to a menu callback that this module enables at
/slack_recieve. If the post contains the correct Slack Token, Slack Receive 
will then execute any functions that are implemented via 
hook_slack_receive_api.

* Note: this module is a an API module and does not do anything on its' own. 
Please enable the included slack_receive_example module to see working 
examples of functionality that is possible via Slack Receive.

-- REQUIREMENTS --

* This module assumes that you currently have admin access to a Slack team. 
See: http://slack.com.

* Your team must have the 'Outgoing Webhooks' integration enabled 
see: https://api.slack.com/outgoing-webhooks


-- INSTALLATION --

* Install as usual, see https://www.drupal.org/node/895232 for further 
information.


-- CONFIGURATION --

* The slack admin form for storing your Slack API Token will be available 
here: /admin/config/services/slack_recieve.

-- CUSTOMIZATION --

* Please see the bundled 'slack_receive_examples' for detailed sample 
implementations of Slack Receive.

-- FAQ --


-- CONTACT --

Current maintainers:
* Michael Sherron (msherron) - http://drupal.org/user/470070
