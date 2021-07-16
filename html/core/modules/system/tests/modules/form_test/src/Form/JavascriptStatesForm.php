<?php

namespace Drupal\form_test\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Builds a simple form to test states.
 *
 * @see \Drupal\FunctionalJavascriptTests\Core\Form\JavascriptStatesTest
 */
class JavascriptStatesForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'javascript_states_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['checkbox_trigger'] = [
      '#type' => 'checkbox',
      '#title' => 'Checkbox trigger',
    ];
    $form['textfield_trigger'] = [
      '#type' => 'textfield',
      '#title' => 'Textfield trigger',
    ];
    $form['radios_trigger'] = [
      '#type' => 'radios',
      '#title' => 'Radios trigger',
      '#options' => [
        'value1' => 'Value 1',
        'value2' => 'Value 2',
        'value3' => 'Value 3',
      ],
    ];
    $form['checkboxes_trigger'] = [
      '#type' => 'checkboxes',
      '#title' => 'Checkboxes trigger',
      '#options' => [
        'value1' => 'Value 1',
        'value2' => 'Value 2',
        'value3' => 'Value 3',
      ],
    ];
    $form['select_trigger'] = [
      '#type' => 'select',
      '#title' => 'Select trigger',
      '#options' => [
        'value1' => 'Value 1',
        'value2' => 'Value 2',
        'value3' => 'Value 3',
      ],
      '#empty_value' => '_none',
      '#empty_option' => '- None -',
    ];

    $form['separator'] = [
      '#markup' => '<hr />',
    ];

    // Tested fields.
    $form['textfield_invisible_when_checkbox_trigger_checked'] = [
      '#type' => 'textfield',
      '#title' => 'Texfield invisible when checkbox trigger checked',
      '#states' => [
        'invisible' => [
          ':input[name="checkbox_trigger"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['textfield_required_when_checkbox_trigger_checked'] = [
      '#type' => 'textfield',
      '#title' => 'Texfield required when checkbox trigger checked',
      '#states' => [
        'required' => [
          ':input[name="checkbox_trigger"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['checkbox_unchecked_when_textfield_trigger_filled'] = [
      '#type' => 'checkbox',
      '#title' => 'Checkbox unchecked when textfield trigger filled',
      '#default_value' => '1',
      '#states' => [
        'unchecked' => [
          ':input[name="textfield_trigger"]' => ['filled' => TRUE],
        ],
      ],
    ];
    $form['textfield_visible_when_checkboxes_trigger_value2_checked'] = [
      '#type' => 'textfield',
      '#title' => 'Texfield visible when checkboxes trigger value2 checked',
      '#states' => [
        'visible' => [
          ':input[name="checkboxes_trigger[value2]"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['textfield_visible_when_checkboxes_trigger_value3_checked'] = [
      '#type' => 'textfield',
      '#title' => 'Texfield visible when checkboxes trigger value3 checked',
      '#states' => [
        'visible' => [
          ':input[name="checkboxes_trigger[value3]"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['item_visible_when_select_trigger_has_given_value'] = [
      '#type' => 'item',
      '#title' => 'Item visible when select trigger has given value',
      '#states' => [
        'visible' => [
          ':input[name="select_trigger"]' => ['value' => 'value2'],
        ],
      ],
    ];
    $form['textfield_visible_when_select_trigger_has_given_value'] = [
      '#type' => 'textfield',
      '#title' => 'Textfield visible when select trigger has given value',
      '#states' => [
        'visible' => [
          ':input[name="select_trigger"]' => ['value' => 'value3'],
        ],
      ],
    ];
    $form['item_visible_when_select_trigger_has_given_value_and_textfield_trigger_filled'] = [
      '#type' => 'item',
      '#title' => 'Item visible when select trigger has given value and textfield trigger filled',
      '#states' => [
        'visible' => [
          ':input[name="select_trigger"]' => ['value' => 'value2'],
          ':input[name="textfield_trigger"]' => ['filled' => TRUE],
        ],
      ],
    ];
    $form['textfield_visible_when_select_trigger_has_given_value_or_another'] = [
      '#type' => 'textfield',
      '#title' => 'Textfield visible when select trigger has given value or another',
      '#states' => [
        'visible' => [
          ':input[name="select_trigger"]' => [
            ['value' => 'value2'],
            ['value' => 'value3'],
          ],
        ],
      ],
    ];
    $form['fieldset_visible_when_radios_trigger_has_given_value'] = [
      '#type' => 'fieldset',
      '#title' => 'Fieldset visible when radio trigger has given value',
      '#states' => [
        'visible' => [
          ':input[name="radios_trigger"]' => ['value' => 'value2'],
        ],
      ],
    ];
    $form['fieldset_visible_when_radios_trigger_has_given_value']['textfield_in_fieldset'] = [
      '#type' => 'textfield',
      '#title' => 'Textfield in fieldset',
    ];
    $form['details_expanded_when_checkbox_trigger_checked'] = [
      '#type' => 'details',
      '#title' => 'Details expanded when checkbox trigger checked',
      '#states' => [
        'expanded' => [
          ':input[name="checkbox_trigger"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['details_expanded_when_checkbox_trigger_checked']['textfield_in_details'] = [
      '#type' => 'textfield',
      '#title' => 'Textfield in details',
    ];
    $form['select'] = [
      '#type' => 'select',
      '#title' => 'select 1',
      '#options' => [0 => 0, 1 => 1, 2 => 2],
    ];
    $form['number'] = [
      '#type' => 'number',
      '#title' => 'enter 1',
    ];
    $form['textfield'] = [
      '#type' => 'textfield',
      '#title' => 'textfield',
      '#states' => [
        'visible' => [
          [':input[name="select"]' => ['value' => '1']],
          'or',
          [':input[name="number"]' => ['value' => '1']],
        ],
      ],
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
  }

}
