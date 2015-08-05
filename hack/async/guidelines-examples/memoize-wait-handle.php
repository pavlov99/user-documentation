<?hh

async function time_consuming(): Awaitable<string> {
  // ...
}

async memoize_handle(): Awaitable<string> {
  static $result = null;
  if ($handle === null) {
    $handle = time_consuming(); // memoize the wait handle
  }
  return await $handle;
}

HH\Asio\join(memoize_handle());
