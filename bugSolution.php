function foo(a, b) {
  if (a === null || b === null) {
    return null; // Explicitly handle null values
  }
  // Perform operations assuming a and b are not null
  return a + b; // Example operation
}

// Example usage:
echo foo(10, 20); // Output: 30
echo foo(null, 20); // Output: null
echo foo(10, null); // Output: null
echo foo(null, null); //Output: null