#include<stdio.h>
#include <unistd.h>

int main(int argc, char *argv[])
{
  int n1, n2, res;

  if(argc != 3){
    printf("faltan o hay muchos argumentos: %d\n", argc);
    exit(1);
  }

  n1 = atoi(argv[1]);
  n2 = atoi(argv[2]);

  res = n1 + n2; 

  if(n2 < 0)
  {
    printf("%d+(%d)=%d", n1, n2, res);  
  }else
  {
    printf("%d+%d=%d", n1, n2, res);  
  }

  return 0;
}
