<?hh
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the "hack" directory of this source tree.
 *
 *
 */

/* HH_FIXME[4101] */
function foo1(Traversable $p) {
  foreach ($p as $v) {
    f2($v);
  }
}

function foo2(Traversable<string> $p) {
  foreach ($p as $v) {
    f2($v);
  }
}

function arr1(array $arr) {
//  foo1($arr);
  foo2($arr);
}
function arr2(array<string> $arr) {
//  foo1($arr);
  foo2($arr);
}
function arr3(array<int, string> $arr) {
//  foo1($arr);
  foo2($arr);
}
/* HH_FIXME[4101] */
function map1(Map $map) {
  foo1($map);
  foo2($map);
}
function map2(Map<int, string> $map) {
  foo1($map);
  foo2($map);
}
/* HH_FIXME[4101] */
function vec1(Vector $v) {
  foo1($v);
  foo2($v);
}
function vec2(Vector<string> $v) {
  foo1($v);
  foo2($v);
}

function f1(int $k) {}

function f2(string $v) {}
