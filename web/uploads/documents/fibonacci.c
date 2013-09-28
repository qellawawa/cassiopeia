/* Fibonacci Series c language */
#include<stdio.h>
 
int main(int argc, char *argv[])
{
  int n, first = 1, second = 1, next, c;

  if(argc != 2){
    printf("faltan o hay muchos argumentos\n");
  }

  n = atoi(argv[1]);

  for ( c = 0 ; c < n ; c++ )
  {
     if ( c <= 1 )
        next = 1;
     else
     {
        next = first + second;
        first = second;
        second = next;
     }
     printf("%d ",next);
  }
 
  return 0;
}
