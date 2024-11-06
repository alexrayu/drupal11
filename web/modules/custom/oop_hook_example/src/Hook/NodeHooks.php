<?php

namespace Drupal\oop_hook_example\Hook;

use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Hook\Attribute\Hook;
use Drupal\node\NodeInterface;
use Drupal\node\NodeStorageInterface;

/**
 * Hook implementations for the node module.
 */
class NodeHooks {

  /**
   * The Node Storage.
   *
   * @var \Drupal\node\NodeStorageInterface
   */
  protected NodeStorageInterface $nodeStorage;

  /**
   * NodeHooks constructor.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entityTypeManager
   *   The entity type manager.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $moduleHandler
   *   The module handler.
   */
  public function __construct(
    EntityTypeManagerInterface $entityTypeManager,
    protected ModuleHandlerInterface $moduleHandler,
  ) {
    $this->nodeStorage = $entityTypeManager->getStorage('node');
  }

  /**
   * Implements hook_node_insert(), hook_node_update().
   *
   * Create the hook_node_save() hook.
   */
  #[Hook('node_insert')]
  #[Hook('node_update')]
  public function nodeSave(NodeInterface $node): void {
    #@dev; Debug point.
    $a = 1;
  }

}
