<?hh

// WARNING: Contains some auto-generated boilerplate code, see:
// HHVM\UserDocumentation\MarkdownExt\ExtractedCodeBlocks\FilterBase::addBoilerplate

namespace HHVM\UserDocumentation\Guides\Hack\ClassHHSetMethodFromItems\BasicUsage;

<<__EntryPoint>>
async function _main(): Awaitable<void> {
  \init_docs_autoloader();

  // Create a new Set from an array
  $s = Set::fromItems(varray['red', 'green', 'red', 'blue', 'blue', 'yellow']);
  \var_dump($s);

  // Create a new Set from a Vector
  $s = Set::fromItems(Vector {'red', 'green', 'red', 'blue', 'blue', 'yellow'});
  \var_dump($s);

  // Create a new Set from the values of a Map
  $s = Set::fromItems(Map {
    'red1' => 'red',
    'green' => 'green',
    'red2' => 'red',
    'blue1' => 'blue',
    'blue2' => 'blue',
    'yellow' => 'yellow',
  });
  \var_dump($s);
}
