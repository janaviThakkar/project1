<?php

string variable1 = “String concat”;

string variable2 = “example.”;

int length1 = variable1.Length;
int length2 = variable2.Length;

char[] concat = new char[length1 + length2];
	for (int i = 0; i < length1; i++)

		{
			concat[i] = variable1[i];
		}

	for (int i = 0; i < length2; i++)

		{
			concat[i + length1] = variable2[i];
		}

?>