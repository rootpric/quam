<?php

namespace Drupal\FunctionalJavascriptTests\Core\Form;

use Behat\Mink\Element\TraversableElement;
use Drupal\FunctionalJavascriptTests\WebDriverTestBase;

/**
 * Tests the state of elements based on another elements.
 *
 * @group javascript
 */
class JavascriptStatesTest extends WebDriverTestBase {

  /**
   * {@inheritdoc}
   */
  public static $modules = ['form_test', 'ajax_forms_test'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests the javascript functionality of form states.
   */
  public function testJavascriptStates() {
    $this->drupalGet('form-test/javascript-states-form');
    $page = $this->getSession()->getPage();

    // Test states of elements triggered by a checkbox element.
    $trigger = $page->findField('checkbox_trigger');
    /* Initial state: before the checkbox trigger is checked. */
    // Test that the textfield is visible.
    $this->assertFieldVisible('textfield_invisible_when_checkbox_trigger_checked');
    // Test that the details element is collapsed so the textfield inside is not
    // visible.
    $this->assertFieldNotVisible('textfield_in_details');
    // Test that the textfield is optional.
    $this->assertFieldOptional('textfield_required_when_checkbox_trigger_checked');
    // Change state: check the checkbox.
    $trigger->check();
    // Test that the textfield is not visible anymore.
    $this->assertFieldNotVisible('textfield_invisible_when_checkbox_trigger_checked');
    // Test that the details element is now open so the textfield inside is now
    // visible.
    $this->assertFieldVisible('textfield_in_details');
    // Test that the textfield is now required.
    $this->assertFieldRequired('textfield_required_when_checkbox_trigger_checked');
    // Change back to the initial state to avoid issues running the next tests.
    $trigger->uncheck();

    // Test states of elements triggered by a textfield element.
    $trigger = $page->findField('textfield_trigger');
    $target = $page->findField('checkbox_unchecked_when_textfield_trigger_filled');
    /* Initial state: before the textfield is filled. */
    // Test that the checkbox is checked.
    $this->assertTrue($target->isChecked());
    // Change state: fill the textfield.
    $trigger->setValue('filled');
    // Test that the checkbox is not checked anymore.
    $this->assertFalse($target->isChecked());
    // Change back to the initial state to avoid issues running the next tests.
    $trigger->setValue('');
    // We need to send a backspace hit to trigger JS events.
    $trigger->keyUp(8);

    // Test states of elements triggered by a radios element.
    $trigger = $page->findField('radios_trigger');
    /* Initial state: before the radios is checked. */
    // Test that the fieldset element is not visible so the textfield inside is
    // not visible either.
    $this->assertFieldNotVisible('textfield_in_fieldset');
    // Change state: check the 'Value 2' radio.
    $trigger->selectOption('value2');
    // Test that the fieldset element is now visible so the textfield inside is
    // also visible.
    $this->assertFieldVisible('textfield_in_fieldset');
    // Change back to the initial state to avoid issues running the next tests.
    $trigger->selectOption('value1');

    // Test states of elements triggered by a checkboxes element.
    $trigger1 = $page->findField('checkboxes_trigger[value1]');
    $trigger2 = $page->findField('checkboxes_trigger[value2]');
    $trigger3 = $page->findField('checkboxes_trigger[value3]');
    /* Initial state: before any of the checkboxes is checked. */
    // Test that textfield dependant on checkbox 'value2' is not visible.
    $this->assertFieldNotVisible('textfield_visible_when_checkboxes_trigger_value2_checked');
    // Test that textfield dependant on checkbox 'value3' is not visible.
    $this->assertFieldNotVisible('textfield_visible_when_checkboxes_trigger_value3_checked');
    // Change state: check the 'Value 1' checkbox.
    $trigger1->check();
    // Test that textfield dependant on checkbox 'value2' is still not visible.
    $this->assertFieldNotVisible('textfield_visible_when_checkboxes_trigger_value2_checked');
    // Test that textfield dependant on checkbox 'value3' is still not visible.
    $this->assertFieldNotVisible('textfield_visible_when_checkboxes_trigger_value3_checked');
    // Change state: check the 'Value 2' checkbox.
    $trigger2->check();
    // Test that textfield dependant on checkbox 'value2' is now visible.
    $this->assertFieldVisible('textfield_visible_when_checkboxes_trigger_value2_checked');
    // Test that textfield dependant on checkbox 'value3' is still not visible.
    $this->assertFieldNotVisible('textfield_visible_when_checkboxes_trigger_value3_checked');
    // Change state: check the 'Value 3' checkbox.
    $trigger3->check();
    // Test that textfield dependant on checkbox 'value2' is still visible.
    $this->assertFieldVisible('textfield_visible_when_checkboxes_trigger_value2_checked');
    // Test that textfield dependant on checkbox 'value3' is now visible.
    $this->assertFieldVisible('textfield_visible_when_checkboxes_trigger_value3_checked');
    // Change state: uncheck the 'Value 2' checkbox.
    $trigger2->uncheck();
    // Test that textfield dependant on checkbox 'value2' is now invisible.
    $this->assertFieldNotVisible('textfield_visible_when_checkboxes_trigger_value2_checked');
    // Test that textfield dependant on checkbox 'value3' is still visible.
    $this->assertFieldVisible('textfield_visible_when_checkboxes_trigger_value3_checked');
    // Change back to the initial state to avoid issues running the next tests.
    $trigger1->uncheck();
    $trigger2->uncheck();
    $trigger3->uncheck();

    // Test states of elements triggered by a select element.
    $trigger = $page->findField('select_trigger');
    /* Initial state: before any option of the select box is selected. */
    // Test that item element dependant on select 'Value 2' option is not
    // visible.
    $this->assertSession()->assertElementNotVisible('css', '#edit-item-visible-when-select-trigger-has-given-value');
    // Test that textfield dependant on select 'Value 3' option is not visible.
    $this->assertFieldNotVisible('textfield_visible_when_select_trigger_has_given_value');
    // Test that textfield dependant on select 'Value 2' or 'Value 3' options is
    // not visible.
    $this->assertFieldNotVisible('textfield_visible_when_select_trigger_has_given_value_or_another');
    // Change state: select the 'Value 2' option.
    $trigger->setValue('value2');
    // Test that item element dependant on select 'Value 2' option is now
    // visible.
    $this->assertSession()->assertElementVisible('css', '#edit-item-visible-when-select-trigger-has-given-value');
    // Test that textfield dependant on select 'Value 3' option is not visible.
    $this->assertFieldNotVisible('textfield_visible_when_select_trigger_has_given_value');
    // Test that textfield dependant on select 'Value 2' or 'Value 3' options is
    // now visible.
    $this->assertFieldVisible('textfield_visible_when_select_trigger_has_given_value_or_another');
    // Change state: select the 'Value 3' option.
    $trigger->setValue('value3');
    // Test that item element dependant on select 'Value 2' option is not
    // visible anymore.
    $this->assertSession()->assertElementNotVisible('css', '#edit-item-visible-when-select-trigger-has-given-value');
    // Test that textfield dependant on select 'Value 3' option is now visible.
    $this->assertFieldVisible('textfield_visible_when_select_trigger_has_given_value');
    // Test that textfield dependant on select 'Value 2' or 'Value 3' options is
    // still visible.
    $this->assertFieldVisible('textfield_visible_when_select_trigger_has_given_value_or_another');
    // Change back to the initial state to avoid issues running the next tests.
    $trigger->setValue('_none');

    // Test states of elements triggered by a more than one element.
    $selectTrigger = $page->findField('select_trigger');
    $textfieldTrigger = $page->findField('textfield_trigger');
    /* Initial state: before any option of the select box is selected. */
    // Test that item element dependant on select 'Value 2' option and textfield
    // is not visible.
    $this->assertSession()->assertElementNotVisible('css', '#edit-item-visible-when-select-trigger-has-given-value-and-textfield-trigger-filled');
    // Change state: select the 'Value 2' option.
    $selectTrigger->setValue('value2');
    // Test that item element dependant on select 'Value 2' option and textfield
    // is still not visible.
    $this->assertSession()->assertElementNotVisible('css', '#edit-item-visible-when-select-trigger-has-given-value-and-textfield-trigger-filled');
    // Change state: fill the textfield.
    $textfieldTrigger->setValue('filled');
    // Test that item element dependant on select 'Value 2' option and textfield
    // is now visible.
    $this->assertSession()->assertElementVisible('css', '#edit-item-visible-when-select-trigger-has-given-value-and-textfield-trigger-filled');
    // Change back to the initial state to avoid issues running the next tests.
    $selectTrigger->setValue('_none');
    $textfieldTrigger->setValue('');
    // We need to send a backspace hit to trigger JS events.
    $textfieldTrigger->keyUp(8);
  }

  /**
   * Tests form states in form with ajax submit.
   */
  public function testAjaxJavascriptStates() {
    $this->drupalGet('ajax_forms_test_states_form');
    $page = $this->getSession()->getPage();

    // Make sure that before ajax request behaviour is as expected.
    $page->selectFieldOption('num', 'Second');
    $page->selectFieldOption('color', 'Green');
    // Field that is dependent on the above selections of radios is visible.
    $this->assertFieldVisible('edit-textfield4');
    // Another (random) field is invisible.
    $this->assertFieldNotVisible('edit-textfield1');

    // Now trigger AJAX submit.
    $submit = $page->findButton('edit-submit');
    $submit->click();
    $this->assertSession()->assertWaitOnAjaxRequest();
    // Change values on which state of textfields depends.
    $page->selectFieldOption('num', 'First');
    // Field that was visible should not be now.
    $this->assertFieldNotVisible('edit-textfield4');
    // According to state API rules for form fields, this one should be visible.
    $this->assertFieldVisible('edit-textfield2');
  }

  /**
   * Asserts that the given field is visible.
   *
   * @param string $locator
   *   One of id|name|label|value for the field.
   * @param \Behat\Mink\Element\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   */
  public function assertFieldVisible($locator, TraversableElement $container = NULL) {
    $this->assertSession()->assertElementVisible('named', ['field', $locator], $container);
  }

  /**
   * Asserts that the given field is not visible.
   *
   * @param string $locator
   *   One of id|name|label|value for the field.
   * @param \Behat\Mink\Element\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @throws \Behat\Mink\Exception\ElementNotFoundException
   *   When the element doesn't exist.
   */
  public function assertFieldNotVisible($locator, TraversableElement $container = NULL) {
    $this->assertSession()->assertElementNotVisible('named', ['field', $locator], $container);
  }

  /**
   * Asserts that the given field is required.
   *
   * @param string $locator
   *   One of id|name|label|value for the field.
   * @param \Behat\Mink\Element\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @throws \Behat\Mink\Exception\ElementNotFoundException
   *   When the element doesn't exist.
   */
  public function assertFieldRequired($locator, TraversableElement $container = NULL) {
    $this->assertSession()->assertElementRequired('named', ['field', $locator], $container);
  }

  /**
   * Asserts that the given field is optional (not required).
   *
   * @param string $locator
   *   One of id|name|label|value for the field.
   * @param \Behat\Mink\Element\TraversableElement $container
   *   (optional) The document to check against. Defaults to the current page.
   *
   * @throws \Behat\Mink\Exception\ElementNotFoundException
   *   When the element doesn't exist.
   */
  public function assertFieldOptional($locator, TraversableElement $container = NULL) {
    $this->assertSession()->assertElementOptional('named', ['field', $locator], $container);
  }

}
