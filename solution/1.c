# include <stdio.h>
int main()
{
    int i=0,n=0,a=1,b=0;
    scanf("%d",&n);
    for(i=2;i<n;i++)
        {
            if(i==1)
                continue;
            if(n%i==0)
                {
                    a=i;
                    break;

                }
            else
                b=i;
        }
    if(n%a==0)
        printf("Not a Prime Number");
    else
        if(n%b!=0)
            printf("Prime Number");
    return 0;
}
