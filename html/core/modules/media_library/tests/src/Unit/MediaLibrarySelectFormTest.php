<?php

namespace Drupal\Tests\media_library\Unit;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\media_library\Plugin\views\field\MediaLibrarySelectForm;
use Drupal\Tests\UnitTestCase;
use Drupal\views\ResultRow;
use Drupal\views\ViewExecutable;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

/**
 * @coversDefaultClass \Drupal\media_library\Plugin\views\field\MediaLibrarySelectForm
 * @group media_library
 */
class MediaLibrarySelectFormTest extends UnitTestCase {

  /**
   * Tests the viewsForm method.
   *
   * @covers ::viewsForm
   */
  public function testViewsForm() {
    $row = new ResultRow();
    $field = new MediaLibrarySelectForm([], '', []);

    $container = new ContainerBuilder();
    $container->set('string_translation', $this->createMock(TranslationInterface::class));
    \Drupal::setContainer($container);

    $query = $this->getMockBuilder(ParameterBag::class)
      ->setMethods(['all'])
      ->disableOriginalConstructor()
      ->getMock();
    $query->expects($this->any())
      ->method('all')
      ->willReturn([]);

    $request = $this->getMockBuilder(Request::class)
      ->disableOriginalConstructor()
      ->getMock();
    $request->query = $query;

    $view = $this->getMockBuilder(ViewExecutable::class)
      ->setMethods(['getRequest', 'initStyle'])
      ->disableOriginalConstructor()
      ->getMock();
    $view->expects($this->any())
      ->method('getRequest')
      ->willReturn($request);
    $view->expects($this->any())
      ->method('initStyle')
      ->willReturn(TRUE);

    $view_entity = $this->getMockBuilder('Drupal\views\Entity\View')
      ->disableOriginalConstructor()
      ->getMock();
    $view_entity->expects($this->any())
      ->method('get')
      ->willReturn([]);
    $view_entity->expects($this->any())
      ->method('getDisplay')
      ->willReturn(['display_plugin' => []]);
    $view->storage = $view_entity;

    $display_manager = $this->getMockBuilder('\Drupal\views\Plugin\ViewsPluginManager')
      ->disableOriginalConstructor()
      ->getMock();
    $display = $this->getMockBuilder('Drupal\views\Plugin\views\display\DefaultDisplay')
      ->disableOriginalConstructor()
      ->getMock();
    $display_manager->expects($this->any())
      ->method('createInstance')
      ->willReturn($display);
    $container->set('plugin.manager.views.display', $display_manager);
    \Drupal::setContainer($container);

    $form_state = $this->createMock(FormStateInterface::class);
    $view->result = [$row];
    $field->init($view, $display);
    $form = [];
    $field->viewsForm($form, $form_state);
    $this->assertNotEmpty($form);
  }

}
