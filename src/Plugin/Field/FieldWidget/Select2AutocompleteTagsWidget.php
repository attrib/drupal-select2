<?php
/**
 * @file
 * Contains \Drupal\select2\Entity\FieldWidget\AutocompleteWidget.
 */

namespace Drupal\select2\Plugin\Field\FieldWidget;

use Drupal\Core\Field\Plugin\Field\FieldWidget\EntityReferenceAutocompleteTagsWidget;

/**
 * Plugin implementation of the 'entity_reference autocomplete-tags' widget.
 *
 * @FieldWidget(
 *   id = "select2_autocomplete_tags",
 *   label = @Translation("Autocomplete (Tags style, Select2)"),
 *   description = @Translation("An autocomplete text field."),
 *   field_types = {
 *     "entity_reference"
 *   },
 *   multiple_values = TRUE
 * )
 */
class Select2AutocompleteTagsWidget extends EntityReferenceAutocompleteTagsWidget  {

  use Select2AutocompleteTrait;

}
