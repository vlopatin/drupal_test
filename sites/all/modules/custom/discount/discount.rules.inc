<?php
/**
 *
 * Implementation of hook_rules_action_info().
 *
 */
function discount_rules_action_info() {
  $actions = array(
    'discount_view_message' => array(
      'label' => t('View message for selected users'),
      'group' => t('My custom actions'),
      'parameter' => array(
        // To select a user role.
        'roles' => array(
          'type' => 'list<integer>',
          'label' => t('Roles'),
          'options list' => 'entity_metadata_user_roles',
          'description' => t('Select the roles whose users can view your message.'),
        ),
        // Messages that should appear after a particular action.
        'message' => array(
          'type' => 'text',
          'label' => t('Message'),
          'description' => t("The message body."),
        ),
      ),
    ),
  );
  return $actions;
}

function discount_view_message($roles, $message) {
  global $user;
  $roles_mg = array_intersect_key($user->roles, $roles);
  foreach ($roles_mg as $key => $value) {
    if (in_array($value, $user->roles)) {
      drupal_set_message($message);
    }
  }

}