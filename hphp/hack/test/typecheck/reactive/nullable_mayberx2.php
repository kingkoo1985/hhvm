<?hh // strict

<<__Rx, __OnlyRxIfArgs>>
function f(<<__OnlyRxIfRxFunc>>?(function(): int) $f): void {
}

<<__Rx>>
function g1(): void {
  // ERROR
  f(<<__NonRx>>() ==> {
    print 1;
    return 1;
  });
}
