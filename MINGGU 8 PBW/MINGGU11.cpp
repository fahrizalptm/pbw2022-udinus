#include <iostream>

using namespace std;

int main()
{
    int array2D[3][4] = {{0,1,2,3},{4,5,6,7},{8,9,10,11}};
    int citraGrayscale[2][3];
    int citraBiner[2][3];
    int sumK1 = 0;
    int muncul0;
    //input
    for(int i=0; i<2; i++)
    {
        for(int j=0; j<3; j++)
        {
            cout << "Masukkan citra greyscale[" << i << "][" << j << "] = ";
            cin >> citraGrayscale[i][j];
        }
    }

    //output
    for(int i=0; i<2; i++)
    {
        for(int j=0; j<3; j++)
        {
            cout << citraGrayscale[i][j] << "\t";
        }
        cout << endl;
    }
    //greyscale ke biner
    for(int i=0; i<2; i++)
    {
        for(int j=0; j<3; j++)
        {
            if(citraGrayscale[i][j] < 128)
            {
                citraBiner[i][j] = 0;
            }
            else
            {
                citraBiner[i][j] = 255;
            }
        }
    }
    cout << endl;
    //output
    for(int i=0; i<2; i++)
    {
        for(int j=0; j<3; j++)
        {
            cout << citraBiner[i][j] << "\t";
            muncul0 = muncul0 + 1;
        }
        cout << endl;
    }

    //sum greyscale kolom 1
    for(int j=0; j<3; j++)
    {
        sumK1 = sumK1 + citraGrayscale[0][j]; //baris pertama
    }
    cout << "Sum greyscale kolom 1 = " << sumK1 << endl;
    cout << "Citra 0 (hitam) di biner = " << muncul0 << endl;
    return 0;
}