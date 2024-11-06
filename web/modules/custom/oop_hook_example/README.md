## INFORMATION

OO Hooks are a new way introduced in Drupal 11.1 and available in 
Drupal 11.x-dev.

See https://www.drupal.org/node/3442349

OO Hooks are classes placed in `src/Hook` and having the `#[Hook]` attribute.

OO Hook Classes are **autowired** - they use the Symfony autowiring system, that
allows calling services without declaring them in the yaml file. However, those
services need to be declared in a special way.

See https://www.drupal.org/node/3218156
