L = 100
S = 0
N = 10

while N != 1:
    x = L * (N - 1) / N
    y = L - x
    S += y
    N -= 1
    print(x)

S += L

print(f'Max result: {S}')